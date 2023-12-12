from .models import User
from django.contrib import admin
from django.contrib.auth.admin import UserAdmin as BaseUserAdmin

class CustomUserAdmin(BaseUserAdmin):
    ordering = ['email']  
    list_display = ['email', 'full_name', 'address']  

    fieldsets = (
        (None, {'fields': ('email', 'password')}),
        ('Información personal', {'fields': ('full_name', 'address')}),
        ('Permisos', {'fields': ('is_active', 'is_staff', 'is_superuser', 'groups', 'user_permissions')}),
        ('Fechas importantes', {'fields': ('last_login', 'date_joined')}),
    )

    add_fieldsets = (
        (None, {
            'classes': ('wide',),
            'fields': ('email', 'full_name', 'address', 'password1', 'password2'),
        }),
    )


admin.site.register(User, CustomUserAdmin)