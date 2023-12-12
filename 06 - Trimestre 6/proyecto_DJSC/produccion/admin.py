from django.contrib import admin
from .models import (
    Type_Activity, State_Activity, Type_Production, State_Production,
    Novelty_Production, Activity, Production
)
from import_export import resources
from import_export.admin import ImportExportModelAdmin

@admin.register(Type_Activity)
class TypeActivityAdmin(ImportExportModelAdmin):
    list_display = ('type',)
    search_fields = ('type',)

@admin.register(State_Activity)
class StateActivityAdmin(ImportExportModelAdmin):
    list_display = ('state',)
    search_fields = ('state',)

@admin.register(Type_Production)
class TypeProductionAdmin(ImportExportModelAdmin):
    list_display = ('type',)
    search_fields = ('type',)

@admin.register(State_Production)
class StateProductionAdmin(ImportExportModelAdmin):
    list_display = ('state',)
    search_fields = ('state',)

@admin.register(Novelty_Production)
class NoveltyProductionAdmin(ImportExportModelAdmin):
    list_display = ('novelty',)
    search_fields = ('novelty',)

@admin.register(Activity)
class ActivityAdmin(ImportExportModelAdmin):
    list_display = ('date', 'novelty', 'state', 'type')
    search_fields = ('date', 'novelty', 'state__state', 'type__type')
    list_filter = ('state', 'type')

@admin.register(Production)
class ProductionAdmin(ImportExportModelAdmin):
    list_display = ('activity', 'date', 'novelty', 'type', 'state')
    search_fields = ('activity__novelty', 'date', 'novelty__novelty', 'type__type', 'state__state')
    list_filter = ('type', 'state')

class TypeActivityResource(resources.ModelResource):
    class Meta:
        model = Type_Activity
        fields = ('type',)

class StateActivityResource(resources.ModelResource):
    class Meta:
        model = State_Activity
        fields = ('state',)

class TypeProductionResource(resources.ModelResource):
    class Meta:
        model = Type_Production
        fields = ('type',)

class StateProductionResource(resources.ModelResource):
    class Meta:
        model = State_Production
        fields = ('state',)

class NoveltyProductionResource(resources.ModelResource):
    class Meta:
        model = Novelty_Production
        fields = ('novelty',)

class ActivityResource(resources.ModelResource):
    class Meta:
        model = Activity
        fields = ('date', 'novelty', 'state', 'type')

class ProductionResource(resources.ModelResource):
    class Meta:
        model = Production
        fields = ('activity', 'date', 'novelty', 'type', 'state')