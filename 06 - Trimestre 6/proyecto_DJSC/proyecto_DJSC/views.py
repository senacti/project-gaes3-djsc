import json
from multiprocessing import AuthenticationError
from django.shortcuts import get_object_or_404, render
from django.shortcuts import redirect
from django.contrib.auth import login
from django.contrib.auth import logout
from django.contrib.auth import authenticate
from django.contrib import messages
from django.urls import reverse

from produccion.forms import AssignEmployeeForm, ProductionForm
from ventas.forms import PaymentForm, SaleForm
from .forms import RegistrationForm
from django.contrib.auth.decorators import login_required
from users.decorators import no_authenticated_user
from django.views.generic import View
from django.http import HttpResponse, HttpResponseRedirect
import os
from django.conf import settings
from django.http import HttpResponse
from django.template.loader import get_template
from xhtml2pdf import pisa
from django.contrib.staticfiles import finders
from solicitudes.models import Contract_Sub_Company, Request, State_Request, State_Sub_Company, State_Contract_Sub_Company
from produccion.models import Activity, Production, Type_Activity,State_Activity, Novelty_Activity,Type_Production
from django.core.mail import EmailMessage
from django.template.loader import render_to_string
from django.http import JsonResponse
from users.models import User

from solicitudes.models import Request,Type_Service,Service
from ventas.models import Sale,Type_Payment,State_Sale,Payment
from solicitudes.forms import ServiceForm,RequestForm, SubCompanyContractForm

def index(request):
    return render(request,'index.html',{
        #context
    })
def editActividad(request, actividad_id):
    actividad = get_object_or_404(Activity, pk=actividad_id)
    estados = State_Activity.objects.all()
    tipos_novedad = Novelty_Activity.objects.all()
    
    if request.method == 'POST':
        form = AssignEmployeeForm(request.POST, instance=actividad)
        if form.is_valid():
            form.save()
            return redirect('asignarempleados')
    else:
        form = AssignEmployeeForm(instance=actividad) 
    
    return render(request, 'editActividad.html', {'actividad': actividad, 'estados': estados, 'tipos_novedad': tipos_novedad, 'form': form})
def asignarEmpleadoActividad(request):
    return render(request, 'asignarEmpleadoActividad.html', {})
def asignarempleados(request):
    tipos_actividad = Activity.objects.all()
    return render(request,'asignarempleados.html',{'tipos_actividad': tipos_actividad})
def asignarProcesosProduccion(request):
    return render(request,'asignarProcesosProduccion.html',{
        #context
    })
def catalogo(request):
    return render(request,'catalogo.html',{
        #context
    })
@login_required
def dashboard_jefe_de_produccion(request):
   user = request.user
   full_name = user.full_name if hasattr(user, 'full_name') else None
    
   return render(request, 'dashboard jefe de produccion.html', {'full_name': full_name})
@login_required
def dashboard_view(request):
    user = request.user
    full_name = user.full_name if hasattr(user, 'full_name') else None
    
    return render(request, 'dashboard.html', {'full_name': full_name})

@login_required
def dashboardadmin_view(request):
    user = request.user
    full_name = user.full_name if hasattr(user, 'full_name') else None
    
    return render(request, 'dashboardadmin.html', {'full_name': full_name})

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
    tipos = Type_Payment.objects.all()
    solicitudes = Request.objects.all()
    if request.method == 'POST':
        form = SaleForm(request.POST)
        if form.is_valid():
            form.save()
            return redirect('realizarventa')
    else:
        form = SaleForm()
    return render(request, 'realizarventa.html', {'form': form, 'solicitudes': solicitudes, 'tipos': tipos})
def registrarActividades(request):
    tipos_actividad = Type_Activity.objects.all()
    if request.method == 'POST':
        form = AssignEmployeeForm(request.POST)
        if form.is_valid():
            actividad = form.save(commit=False)
            
            tipo_actividad_id = request.POST.get('type')
            tipo_actividad = Type_Activity.objects.get(pk=tipo_actividad_id)
            
            actividad.type = tipo_actividad
            actividad.save()
            
            return redirect('asignarempleados')  
    else:
        form = AssignEmployeeForm()
    return render(request, 'registrarActividades.html', {'form': form, 'tipos_actividad': tipos_actividad})
def Registro_de_Servicio(request):
    if request.method == 'POST':
        form = ServiceForm(request.POST, request.FILES)
        if form.is_valid():
            form.save()
            return redirect('Registro de Servicio')
    else:
        form = ServiceForm()
    tipos_servicio = Type_Service.objects.all()
    return render(request, 'Registro de Servicio.html', {'form': form, 'tipos_servicio': tipos_servicio})

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
    producciones= Production.objects.all()
    return render(request,'ordenProduccion/consultarordenproduccion.html',{'producciones': producciones,})
def edit(request):
    return render(request,'ordenProduccion/edit.html',{
        #context
    })
def pedidosjp(request):
    
    solicitudes = Request.objects.all()
    return render(request,'ordenProduccion/pedidosjp.html',{'solicitudes': solicitudes,})
def registrarOrdenProduccion(request):
    if request.method == 'POST':
        form = ProductionForm(request.POST)
        if form.is_valid():
            form.save()
            return redirect('consultarordenproduccion')
        else:
            
            print(form.errors)
    else:
        form = ProductionForm()
    actividades = Activity.objects.all()
    tipos_produccion = Type_Production.objects.all()
    return render(request, 'ordenProduccion/registrarOrdenProduccion.html', {'form': form, 'actividades': actividades, 'tipos_produccion': tipos_produccion})
def abonos(request):
    ventas = Sale.objects.all()
    solicitudes = Request.objects.all()
    servicios = Service.objects.all()
    return render(request,'ordenServicio/abonos.html',{'solicitudes': solicitudes,'servicios': servicios, 'ventas': ventas})
def consultarordenesservicio(request):
    requests = Request.objects.all()
    return render(request,'ordenServicio/consultarordenesservicio.html',{'requests':requests
    })
def estadoedit(request):
    if request.method == 'POST':
        solicitud_id = request.POST.get('solicitud_id')
        estado_id = request.POST.get('estadoSolicitud')
        solicitud = Request.objects.get(id=solicitud_id)
        estado = State_Request.objects.get(id=estado_id)
        solicitud.state = estado
        solicitud.save()
        return redirect('consultarordenesservicio')  
    else:
        solicitud_id = request.GET.get('solicitud_id')
        solicitud = Request.objects.get(id=solicitud_id)
        estado_anterior = solicitud.state  # Obtener el estado anterior
        estados = State_Request.objects.all()
        return render(request, 'ordenServicio/estadoedit.html', {'estados': estados, 'solicitud': solicitud, 'estado_anterior': estado_anterior})


def eliminar_solicitud(request):
    if request.method == 'POST':
        solicitud_id = request.POST.get('solicitud_id')
        solicitud = get_object_or_404(Request, id=solicitud_id)
        
        # Verificar si el estado es "finalizado" o "cancelado"
        if solicitud.state.state in ["finalizado", "cancelado"]:
            solicitud.delete()
            return redirect('consultarordenesservicio')
        else:
            # Si el estado no es "finalizado" o "cancelado", redirige de vuelta a la página sin eliminar
            return redirect('consultarordenesservicio')


def RealizarAbono(request):
    tipos = Type_Payment.objects.all()
    ventas = Sale.objects.all()
    if request.method == 'POST':
        form = PaymentForm(request.POST)
        if form.is_valid():
            form.save()
            return redirect('RealizarAbono')
    else:
        form = PaymentForm()
    return render(request, 'ordenServicio/RealizarAbono.html', {'form': form, 'ventas': ventas, 'tipos': tipos})
def servicios(request):
    servicios = Service.objects.all()
    if request.method == 'POST':
        data = json.loads(request.body)
        servicio_id = data.get('servicio_id')
        descripcion = data.get('descripcion')
        servicio = Service.objects.get(pk=servicio_id)
        solicitud = Request(description=descripcion, service=servicio)
        solicitud.save()
        return HttpResponseRedirect(reverse('dashboard'))  
    else:
        form = RequestForm()

    return render(request, 'ordenServicio/servicios.html', {'servicios': servicios, 'form': form})
def consultarcontratos(request):
    contratos = Contract_Sub_Company.objects.all()
    return render(request,'registroContrato/consultarcontratos.html',{'contratos':contratos})
def estadoCedit(request):
    if request.method == 'GET':
        contrato_id = request.GET.get('contrato_id')
        if contrato_id:
            contrato = get_object_or_404(Contract_Sub_Company, pk=contrato_id)
            selected_state = contrato.state
        else:
            selected_state = None
        estados = State_Contract_Sub_Company.objects.all()  # Obtener todos los estados de contrato
        return render(request, 'registroContrato/estadoCedit.html', {'estados': estados, 'selected_state': selected_state, 'contrato_id': contrato_id})
    elif request.method == 'POST':
        contrato_id = request.POST.get('contrato_id')
        nuevo_estado_id = request.POST.get('estadoContrato')
        if contrato_id and nuevo_estado_id:
            contrato = get_object_or_404(Contract_Sub_Company, pk=contrato_id)
            nuevo_estado = get_object_or_404(State_Contract_Sub_Company, pk=nuevo_estado_id)
            contrato.state = nuevo_estado
            contrato.save()
        return redirect('consultarcontratos')


def eliminar_contrato(request):
    if request.method == 'POST':
        contrato_id = request.POST.get('contrato_id')
        contrato = get_object_or_404(Contract_Sub_Company, id=contrato_id)
        
        
        contrato.delete()
        return redirect('consultarcontratos')
       

def RegistroContrato(request):
    sub_company = None  
    contract_sub_company = None 
    if request.method == 'POST':
        form = SubCompanyContractForm(request.POST)
        if form.is_valid():
            sub_company, contract_sub_company = form.save()
            return redirect('RegistroContrato')
    else:
        form = SubCompanyContractForm()

    solicitudes = Request.objects.all()
    return render(request, 'registroContrato/RegistroContrato.html', {'form': form, 'solicitudes': solicitudes, 'sub_company': sub_company, 'contract_sub_company': contract_sub_company})
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
def validar_correo_existente(request):
    if request.method == 'POST':
        correo = request.POST.get('correo')
        if User.objects.filter(email=correo).exists():
            return JsonResponse({'existe': True})
    return JsonResponse({'existe': False})
