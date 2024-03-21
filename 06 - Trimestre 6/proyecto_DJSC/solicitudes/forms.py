from django import forms
from .models import Service,Request,Sub_Company,Contract_Sub_Company
from django.core.exceptions import ValidationError

class ServiceForm(forms.ModelForm):
    class Meta:
        model = Service
        fields = ['type', 'image', 'name', 'amount', 'description']

class RequestForm(forms.ModelForm):
    class Meta:
        model = Request
        fields = ['state','description']



class SubCompanyContractForm(forms.Form):
    nombre = forms.CharField(max_length=30, label="Nombre de sub empresa")
    telefono = forms.CharField(max_length=10, label="Teléfono de contacto")
    correo = forms.EmailField(label="Email corporativo")
    fecha_fc = forms.DateField(label="Fecha de finalización del contrato")
    solicitud = forms.ModelChoiceField(queryset=None, label="Solicitud")  

    def __init__(self, *args, **kwargs):
        super(SubCompanyContractForm, self).__init__(*args, **kwargs)
        # Definir el queryset para el campo de selección de la solicitud
        self.fields['solicitud'].queryset = Request.objects.all()

    def clean(self):
        cleaned_data = super().clean()
        nombre = cleaned_data.get('nombre')
        sub_company = Sub_Company.objects.filter(name=nombre).first()
        if sub_company and hasattr(sub_company, 'contract_sub_company'):
            raise ValidationError("Esta empresa ya tiene un contrato asociado. No se puede crear otro.")

    def save(self):
        nombre = self.cleaned_data['nombre']
        sub_company, _ = Sub_Company.objects.get_or_create(
            name=nombre,
            defaults={
                'phone': self.cleaned_data['telefono'],
                'email': self.cleaned_data['correo']
            }
        )
        contract_sub_company, created = Contract_Sub_Company.objects.get_or_create(
            subcompany=sub_company,
            defaults={
                'dateF': self.cleaned_data['fecha_fc'],
                'request': self.cleaned_data['solicitud']
            }
        )

        if not created:
            contract_sub_company.dateF = self.cleaned_data['fecha_fc']
            contract_sub_company.request = self.cleaned_data['solicitud']
            contract_sub_company.save()

        return sub_company, contract_sub_company