from django import forms
from .models import Payment, Sale

class SaleForm(forms.ModelForm):
    class Meta:
        model = Sale
        fields = ['price', 'amount', 'totalPrice', 'request', 'state', 'type']

class PaymentForm(forms.ModelForm):
    class Meta:
        model = Payment
        fields = ['sale', 'paymentI', 'type']