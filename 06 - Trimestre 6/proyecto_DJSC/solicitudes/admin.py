from django.contrib import admin
from .models import Type_Service, State_Service, State_Request, State_Sub_Company, State_Contract_Sub_Company, Service, Sub_Company, Request, Contract_Sub_Company

@admin.register(Type_Service)
class TypeServiceAdmin(admin.ModelAdmin):
    list_display = ('type',)
    search_fields = ('type',)

@admin.register(State_Service)
class StateServiceAdmin(admin.ModelAdmin):
    list_display = ('state',)
    search_fields = ('state',)

@admin.register(State_Request)
class StateRequestAdmin(admin.ModelAdmin):
    list_display = ('state',)
    search_fields = ('state',)

@admin.register(State_Sub_Company)
class StateSubCompanyAdmin(admin.ModelAdmin):
    list_display = ('state',)
    search_fields = ('state',)

@admin.register(State_Contract_Sub_Company)
class StateContractSubCompanyAdmin(admin.ModelAdmin):
    list_display = ('state',)
    search_fields = ('state',)

@admin.register(Service)
class ServiceAdmin(admin.ModelAdmin):
    list_display = ('name', 'type', 'amount', 'state')
    search_fields = ('name', 'type__type', 'state__state')
    list_filter = ('type', 'state')
    list_editable = ('amount',)

@admin.register(Sub_Company)
class SubCompanyAdmin(admin.ModelAdmin):
    list_display = ('name', 'phone', 'email', 'date', 'state')
    search_fields = ('name', 'phone', 'email', 'state__state')
    list_filter = ('state',)

@admin.register(Request)
class RequestAdmin(admin.ModelAdmin):
    list_display = ('description', 'date', 'state', 'service')
    search_fields = ('description', 'date', 'state__state', 'service__name')
    list_filter = ('state', 'date')

@admin.register(Contract_Sub_Company)
class ContractSubCompanyAdmin(admin.ModelAdmin):
    list_display = ('request', 'state', 'dateI', 'dateF', 'subcompany')
    search_fields = ('request__description', 'state__state', 'subcompany__name')
    list_filter = ('state', 'dateI', 'dateF')