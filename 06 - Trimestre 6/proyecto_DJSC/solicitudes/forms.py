from django import forms
from .models import Service

class ServiceForm(forms.ModelForm):
    class Meta:
        model = Service
        fields = ['type', 'image', 'name', 'amount', 'description']

class RequestForm(forms.ModelForm):
    class Meta:
        model = Service
        fields = ['description']