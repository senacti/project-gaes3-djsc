from django import forms
from .models import Activity,Production


class AssignEmployeeForm(forms.ModelForm):
    class Meta:
        model = Activity
        fields = ['employee', 'date', 'email','type', 'state', 'novelty']


class ProductionForm(forms.ModelForm):
    class Meta:
        model = Production
        fields = ['activity', 'novelty', 'type', 'state']