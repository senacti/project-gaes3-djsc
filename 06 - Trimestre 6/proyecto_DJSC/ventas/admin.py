from django.contrib import admin
from .models import Type_Payment, State_Sale, Sale, Payment
from import_export import resources
from import_export.admin import ImportExportModelAdmin

@admin.register(Type_Payment)
class TypePaymentAdmin(ImportExportModelAdmin):
    list_display = ('type',)
    search_fields = ('type',)

@admin.register(State_Sale)
class StateSaleAdmin(ImportExportModelAdmin):
    list_display = ('state',)
    search_fields = ('state',)

@admin.register(Sale)
class SaleAdmin(ImportExportModelAdmin):
    list_display = ('date', 'price', 'amount', 'totalVAT', 'totalPrice','request','state')
    search_fields = ('date', 'datedelivery', 'state__state')
    list_filter = ('state',)

@admin.register(Payment)
class PaymentAdmin(ImportExportModelAdmin):
    list_display = ('sale', 'date', 'paymentdate', 'paymentI', 'type')
    search_fields = ('sale__date', 'date', 'paymentdate', 'type__type')
    list_filter = ('type',)

class TypePaymentResource(resources.ModelResource):
    class Meta:
        model = Type_Payment
        fields = ('type',)

class StateSaleResource(resources.ModelResource):
    class Meta:
        model = State_Sale
        fields = ('state',)

class SaleResource(resources.ModelResource):
    class Meta:
        model = Sale
        fields = ('date', 'datedelivery', 'price', 'amount', 'totalVAT', 'totalPrice', 'state')

class PaymentResource(resources.ModelResource):
    class Meta:
        model = Payment
        fields = ('sale', 'date', 'paymentdate', 'amount', 'paymentI', 'type')