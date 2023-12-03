from django.contrib import admin
from .models import (
    Type_Activity, State_Activity, Type_Production, State_Production,
    Novelty_Production, Activity, Production
)

@admin.register(Type_Activity)
class TypeActivityAdmin(admin.ModelAdmin):
    list_display = ('type',)
    search_fields = ('type',)

@admin.register(State_Activity)
class StateActivityAdmin(admin.ModelAdmin):
    list_display = ('state',)
    search_fields = ('state',)

@admin.register(Type_Production)
class TypeProductionAdmin(admin.ModelAdmin):
    list_display = ('type',)
    search_fields = ('type',)

@admin.register(State_Production)
class StateProductionAdmin(admin.ModelAdmin):
    list_display = ('state',)
    search_fields = ('state',)

@admin.register(Novelty_Production)
class NoveltyProductionAdmin(admin.ModelAdmin):
    list_display = ('novelty',)
    search_fields = ('novelty',)

@admin.register(Activity)
class ActivityAdmin(admin.ModelAdmin):
    list_display = ('date', 'novelty', 'state', 'type')
    search_fields = ('date', 'novelty', 'state__state', 'type__type')
    list_filter = ('state', 'type')

@admin.register(Production)
class ProductionAdmin(admin.ModelAdmin):
    list_display = ('activity', 'date', 'novelty', 'type', 'state')
    search_fields = ('activity__novelty', 'date', 'novelty__novelty', 'type__type', 'state__state')
    list_filter = ('type', 'state')
