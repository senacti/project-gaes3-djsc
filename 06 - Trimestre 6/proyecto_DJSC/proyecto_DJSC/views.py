from django.shortcuts import render

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
def dashboard(request):
    return render(request,'dashboard.html',{
        #context
    })
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
def login(request):
    return render(request,'auth/login.html',{
        #context
    })
def register(request):
    return render(request,'auth/register.html',{
        #context
    })
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