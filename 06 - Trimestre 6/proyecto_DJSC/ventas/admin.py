from django.contrib import admin
from .models import Type_Payment, State_Sale, Sale, Payment

@admin.register(Type_Payment)
class TypePaymentAdmin(admin.ModelAdmin):
    list_display = ('type',)
    search_fields = ('type',)

@admin.register(State_Sale)
class StateSaleAdmin(admin.ModelAdmin):
    list_display = ('state',)
    search_fields = ('state',)

@admin.register(Sale)
class SaleAdmin(admin.ModelAdmin):
    list_display = ('date', 'datedelivery', 'price', 'amount', 'totalVAT', 'totalPrice', 'state')
    search_fields = ('date', 'datedelivery', 'state__state')
    list_filter = ('state',)

@admin.register(Payment)
class PaymentAdmin(admin.ModelAdmin):
    list_display = ('sale', 'date', 'paymentdate', 'amount', 'paymentI', 'type')
    search_fields = ('sale__date', 'date', 'paymentdate', 'type__type')
    list_filter = ('type',)
