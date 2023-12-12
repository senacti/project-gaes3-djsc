from multiprocessing import AuthenticationError
from django.shortcuts import render
from django.shortcuts import redirect
from django.contrib.auth import login
from django.contrib.auth import logout
from django.contrib.auth import authenticate
from django.contrib import messages
from .forms import RegistrationForm
from django.contrib.auth.decorators import login_required
from users.decorators import no_authenticated_user
from django.views.generic import View
from django.http import HttpResponse
import os
from django.conf import settings
from django.http import HttpResponse
from django.template.loader import get_template
from xhtml2pdf import pisa
from django.contrib.staticfiles import finders
from produccion.models import Production
from django.core.mail import EmailMessage
from django.template.loader import render_to_string

from solicitudes.models import Request
from ventas.models import Sale

def index(request):
    return render(request,'index.html',{
        #context
    })
def asignarEmpleadoActividad(request):
    return render(request,'asignarEmpleadoActividad.html',{
        #context
    })
def asignarempleados(request):
    return render(request,'asignarempleados.html',{
        #context
    })
def asignarProcesosProduccion(request):
    return render(request,'asignarProcesosProduccion.html',{
        #context
    })
def catalogo(request):
    return render(request,'catalogo.html',{
        #context
    })
def dashboard_jefe_de_produccion(request):
    return render(request,'dashboard jefe de produccion.html',{
        #context
    })

@login_required
def dashboard_view(request):
    user = request.user
    full_name = user.full_name if hasattr(user, 'full_name') else None
    
    return render(request, 'dashboard.html', {'full_name': full_name})

def dashboardadmin(request):
    return render(request,'dashboardadmin.html',{
        #context
    })
def dashboardV(request):
    return render(request,'dashboardV.html',{
        #context
    })
def db(request):
    return render(request,'db.html',{
        #context
    })
def error_404(request):
    return render(request,'error 404.html',{
        #context
    })
def error_500(request):
    return render(request,'error 500.html',{
        #context
    })
def generarinformesp(request):
    return render(request,'generarinformesp.html',{
        #context
    })
def generarinformesS(request):
    return render(request,'generarinformesS.html',{
        #context
    })
def pedidos(request):
    return render(request,'pedidos.html',{
        #context
    })
def realizarventa(request):
    return render(request,'realizarventa.html',{
        #context
    })
def registrarActividades(request):
    return render(request,'registrarActividades.html',{
        #context
    })
def Registro_de_Servicio(request):
    return render(request,'Registro de Servicio.html',{
        #context
    })
@no_authenticated_user
def login_view(request):
    register_form = RegistrationForm() 
    if request.method == 'POST':
        email = request.POST.get('email')
        password = request.POST.get('password')

        if 'login_submit' in request.POST:
            user = authenticate(request, email=email, password=password)

            if user is not None:
                login(request, user)
                if user.is_staff:
                    messages.success(request, f'Bienvenido {user.email} (Administrador)')
                    return redirect('admin:index')
                else:
                    messages.success(request, f'Bienvenido {user.full_name}')
                    return redirect('dashboard')
            else:
                messages.error(request, 'Usuario o contraseña incorrectos')

        elif 'register_submit' in request.POST:
            register_form = RegistrationForm(request.POST)
            if register_form.is_valid():
                user = register_form.save()
                login(request, user)
                messages.success(request, '¡Registro exitoso! Has iniciado sesión automáticamente.')
                return redirect('dashboard')
    else:
        register_form = RegistrationForm()

    return render(request, 'auth/login.html', {'register_form': register_form})
def logout_view(request):
    logout(request)
    messages.success(request, 'Sesión finalizada')
    return redirect('login')



def verify(request):
    return render(request,'auth/verify.html',{
        #context
    })
def consultarordenproduccion(request):
    return render(request,'ordenProduccion/consultarordenproduccion.html',{
        #context
    })
def edit(request):
    return render(request,'ordenProduccion/edit.html',{
        #context
    })
def pedidosjp(request):
    return render(request,'ordenProduccion/pedidosjp.html',{
        #context
    })
def registrarOrdenProduccion(request):
    return render(request,'ordenProduccion/registrarOrdenProduccion.html',{
        #context
    })
def abonos(request):
    return render(request,'ordenServicio/abonos.html',{
        #context
    })
def consultarordenesservicio(request):
    return render(request,'ordenServicio/consultarordenesservicio.html',{
        #context
    })
def Crear_Orden_de_Servicio(request):
    return render(request,'ordenServicio/Crear Orden de Servicio.html',{
        #context
    })
def estadoedit(request):
    return render(request,'ordenServicio/estadoedit.html',{
        #context
    })
def RealizarAbono(request):
    return render(request,'ordenServicio/RealizarAbono.html',{
        #context
    })
def servicios(request):
    return render(request,'ordenServicio/servicios.html',{
        #context
    })
def consultarcontratos(request):
    return render(request,'registroContrato/consultarcontratos.html',{
        #context
    })
def estadoCedit(request):
    return render(request,'registroContrato/estadoCedit.html',{
        #context
    })
def RegistroContrato(request):
    return render(request,'registroContrato/RegistroContrato.html',{
        #context
    })
class GeneratePdf(View):
    def get(self, request, *args, **kwargs):
        template = get_template('reporteS.html')
        logo_path = os.path.join(settings.BASE_DIR, 'static', 'img', 'logo.png')

        requests = Request.objects.all()

        context = {
            'title': 'Reporte de Solicitudes',
            'logo_path': logo_path,
            'requests': requests,
        }
        html = template.render(context)
        response = HttpResponse(content_type='application/pdf')
        response['Content-Disposition'] = 'attachment; filename="reportS.pdf"'
        
        pisa_status = pisa.CreatePDF(html, dest=response, link_callback=link_callback)

        if pisa_status.err:
            return HttpResponse('Error al generar el PDF', status=500)

        return response

def link_callback(uri, rel):
    if settings.DEBUG and uri.startswith(settings.STATIC_URL):
        path = os.path.join(settings.BASE_DIR, uri.replace(settings.STATIC_URL, ""))
        return path

    return uri

class GeneratePdf2(View):
    def get(self, request, *args, **kwargs):
        template = get_template('reporteP.html')
        logo_path = os.path.join(settings.BASE_DIR, 'static', 'img', 'logo.png')

        productions = Production.objects.all()

        context = {
            'title': 'Reporte de Producciones',
            'logo_path': logo_path,
            'productions': productions,
        }
        html = template.render(context)
        response = HttpResponse(content_type='application/pdf')
        response['Content-Disposition'] = 'attachment; filename="reportP.pdf"'
        
        pisa_status = pisa.CreatePDF(html, dest=response, link_callback=link_callback)

        if pisa_status.err:
            return HttpResponse('Error al generar el PDF', status=500)

        return response

def link_callback(uri, rel):
    if settings.DEBUG and uri.startswith(settings.STATIC_URL):
        path = os.path.join(settings.BASE_DIR, uri.replace(settings.STATIC_URL, ""))
        return path

    return uri

class GeneratePdf3(View):
    def get(self, request, *args, **kwargs):
        template = get_template('reporteV.html')
        logo_path = os.path.join(settings.BASE_DIR, 'static', 'img', 'logo.png')

        sales = Sale.objects.all()

        context = {
            'title': 'Reporte de Ventas',
            'logo_path': logo_path,
            'sales': sales,
        }
        html = template.render(context)
        response = HttpResponse(content_type='application/pdf')
        response['Content-Disposition'] = 'attachment; filename="reportV.pdf"'
        
        pisa_status = pisa.CreatePDF(html, dest=response, link_callback=link_callback)

        if pisa_status.err:
            return HttpResponse('Error al generar el PDF', status=500)

        return response

def link_callback(uri, rel):
    if settings.DEBUG and uri.startswith(settings.STATIC_URL):
        path = os.path.join(settings.BASE_DIR, uri.replace(settings.STATIC_URL, ""))
        return path

    return uri

def contactenos(request):
    if request.method == "POST":
        name = request.POST['name']
        email = request.POST['email']
        subject = request.POST['subject']
        message = request.POST['message']
        
        template = render_to_string('email_template.html', {
            'name': name,
            'email': email,
            'message': message
        })
    
        email = EmailMessage(
            subject,
            template,
            settings.EMAIL_HOST_USER,
            ['jesusalbertocastellanosromero@gmail.com']
        )
    
        email.fail_silently = False
        email.send()
    
    return render(request, 'contactenos.html',{

    })