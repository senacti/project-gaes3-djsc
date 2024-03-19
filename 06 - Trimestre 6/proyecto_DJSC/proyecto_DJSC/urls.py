"""
URL configuration for proyecto_DJSC project.

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/4.2/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
from django.contrib import admin
from django.urls import path
from . import views
from .views import GeneratePdf, GeneratePdf2, GeneratePdf3

urlpatterns = [
    path('admin/', admin.site.urls),
    path('', views.index, name='index'),
    path('asignarEmpleadoActividad', views.asignarEmpleadoActividad, name='asignarEmpleadoActividad'),
    path('asignarempleados', views.asignarempleados, name='asignarempleados'),
    path('asignarProcesosProduccion', views.asignarProcesosProduccion, name='asignarProcesosProduccion'),
    path('catalogo', views.catalogo, name='catalogo'),
    path('dashboard jefe de produccion', views.dashboard_jefe_de_produccion, name='dashboard jefe de produccion'),
    path('dashboard', views.dashboard_view, name='dashboard'),
    path('dashboardadmin', views.dashboardadmin_view, name='dashboardadmin'),
    path('dashboardV', views.dashboardV, name='dashboardV'),
    path('db', views.db, name='db'),
    path('error 404', views.error_404, name='error 404'),
    path('error 500', views.error_500, name='error 500'),
    path('generarinformesp', views.generarinformesp, name='generarinformesp'),
    path('generarinformesS', views.generarinformesS, name='generarinformesS'),
    path('pedidos', views.pedidos, name='pedidos'),
    path('realizarventa', views.realizarventa, name='realizarventa'),
    path('registrarActividades', views.registrarActividades, name='registrarActividades'),
    path('Registro de Servicio', views.Registro_de_Servicio, name='Registro de Servicio'),
    path('login', views.login_view, name='login'),
    path('logout/', views.logout_view, name='logout'),
    path('verify', views.verify, name='verify'),
    path('consultarordenproduccion', views.consultarordenproduccion, name='consultarordenproduccion'),
    path('edit', views.edit, name='edit'),
    path('pedidosjp', views.pedidosjp, name='pedidosjp'),
    path('registrarOrdenProduccion', views.registrarOrdenProduccion, name='registrarOrdenProduccion'),
    path('abonos', views.abonos, name='abonos'),
    path('consultarordenesservicio', views.consultarordenesservicio, name='consultarordenesservicio'),
    path('Crear Orden de Servicio', views.Crear_Orden_de_Servicio, name='Crear Orden de Servicio'),
    path('estadoedit', views.estadoedit, name='estadoedit'),
    path('RealizarAbono', views.RealizarAbono, name='RealizarAbono'),
    path('servicios', views.servicios, name='servicios'),
    path('consultarcontratos', views.consultarcontratos, name='consultarcontratos'),
    path('estadoCedit', views.estadoCedit, name='estadoCedit'),
    path('RegistroContrato', views.RegistroContrato, name='RegistroContrato'),
    path('reporteS/', GeneratePdf.as_view(), name='reporteS'),
    path('reporteP/', GeneratePdf2.as_view(), name='reporteP'),
    path('reporteV/', GeneratePdf3.as_view(), name='reporteV'),
    path('contactenos', views.contactenos, name='contactenos'),

]

