from django.contrib import admin
from import_export import resources
from import_export.admin import ImportExportModelAdmin
from .models import Type_Service, State_Service, State_Request, State_Sub_Company, State_Contract_Sub_Company, Service, Sub_Company, Request, Contract_Sub_Company
from django.urls import reverse
from django.utils.html import format_html

@admin.register(Type_Service)
class TypeServiceAdmin(ImportExportModelAdmin):
    list_display = ('type',)
    search_fields = ('type',)

@admin.register(State_Service)
class StateServiceAdmin(ImportExportModelAdmin):
    list_display = ('state',)
    search_fields = ('state',)

@admin.register(State_Request)
class StateRequestAdmin(ImportExportModelAdmin):
    list_display = ('state',)
    search_fields = ('state',)

@admin.register(State_Sub_Company)
class StateSubCompanyAdmin(ImportExportModelAdmin):
    list_display = ('state',)
    search_fields = ('state',)

@admin.register(State_Contract_Sub_Company)
class StateContractSubCompanyAdmin(ImportExportModelAdmin):
    list_display = ('state',)
    search_fields = ('state',)

@admin.register(Service)
class ServiceAdmin(ImportExportModelAdmin):
    list_display = ('name', 'type', 'amount', 'state')
    search_fields = ('name', 'type__type', 'state__state')
    list_filter = ('type', 'state')
    list_editable = ('amount',)

@admin.register(Sub_Company)
class SubCompanyAdmin(ImportExportModelAdmin):
    list_display = ('name', 'phone', 'email', 'date', 'state')
    search_fields = ('name', 'phone', 'email', 'state__state')
    list_filter = ('state',)

@admin.register(Request)
class RequestAdmin(ImportExportModelAdmin):
    list_display = ('description', 'date', 'state', 'service')
    search_fields = ('description', 'date', 'state__state', 'service__name')
    list_filter = ('state', 'date')

@admin.register(Contract_Sub_Company)
class ContractSubCompanyAdmin(ImportExportModelAdmin):
    list_display = ('request', 'state', 'dateI', 'dateF', 'subcompany')
    search_fields = ('request__description', 'state__state', 'subcompany__name')
    list_filter = ('state', 'dateI', 'dateF')

class TypeServiceResource(resources.ModelResource):
    class Meta:
        model = Type_Service
        fields = ('type',)

class StateServiceResource(resources.ModelResource):
    class Meta:
        model = State_Service
        fields = ('state',)

class StateRequestResource(resources.ModelResource):
    class Meta:
        model = State_Request
        fields = ('state',)

class StateSubCompanyResource(resources.ModelResource):
    class Meta:
        model = State_Sub_Company
        fields = ('state',)

class StateContractSubCompanyResource(resources.ModelResource):
    class Meta:
        model = State_Contract_Sub_Company
        fields = ('state',)

class ServiceResource(resources.ModelResource):
    class Meta:
        model = Service
        fields = ('name', 'type', 'amount', 'state')

class SubCompanyResource(resources.ModelResource):
    class Meta:
        model = Sub_Company
        fields = ('name', 'phone', 'email', 'date', 'state')

class RequestResource(resources.ModelResource):
    class Meta:
        model = Request
        fields = ('description', 'date', 'state', 'service')

class ContractSubCompanyResource(resources.ModelResource):
    class Meta:
        model = Contract_Sub_Company
        fields = ('request', 'state', 'dateI', 'dateF', 'subcompany')