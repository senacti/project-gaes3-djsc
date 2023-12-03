from django.db import models

# Create your models here.
class Type_Service(models.Model):
    type = models.CharField(max_length=30, verbose_name="Tipo de servicio")

    def __str__(self):
        return self.type
    
    class Meta:
        verbose_name = "Tipo de servicio"
        verbose_name_plural = "Tipos de servicio"
        db_table = "tipo_Servicio"
        ordering = ['id']

class State_Service(models.Model):
    state = models.CharField(max_length=30, verbose_name="Estado de servicio")

    def __str__(self):
        return self.state
    
    class Meta:
        verbose_name = "Estado de servicio"
        verbose_name_plural = "Estados de servicio"
        db_table = "estado_Servicio"
        ordering = ['id']

class State_Request(models.Model):
    state = models.CharField(max_length=30, verbose_name="Estado de solicitud")

    def __str__(self):
        return self.state
    
    class Meta:
        verbose_name = "Estado de solicitud"
        verbose_name_plural = "Estados de solicitud"
        db_table = "Estado_Solicitud"
        ordering = ['id']

class State_Sub_Company(models.Model):
    state = models.CharField(max_length=30, verbose_name="Estado de sub empresa")

    def __str__(self):
        return self.state
    
    class Meta:
        verbose_name = "Estado de sub empresa"
        verbose_name_plural = "Estados de sub empresa"
        db_table = "Estado_Sub_Empresa"
        ordering = ['id']

class State_Contract_Sub_Company(models.Model):
    state = models.CharField(max_length=30, verbose_name="Estado contrato de sub empresa")

    def __str__(self):
        return self.state
    
    class Meta:
        verbose_name = "Estado contrato de sub empresa"
        verbose_name_plural = "Estados contrato de sub empresa"
        db_table = "Estado_Contrato_Sub_Empresa"
        ordering = ['id']

class Service(models.Model):
    type = models.ForeignKey(Type_Service, on_delete=models.CASCADE,verbose_name="tipo de servicio")
    image = models.ImageField(upload_to='static/img/sercicios/', verbose_name="imagen del servicio")
    name = models.CharField(max_length=30, verbose_name="Nombre de servicio")
    amount = models.PositiveIntegerField(verbose_name="Cantidad")
    description = models.TextField(verbose_name="Descripcion del servicio")
    state = models.ForeignKey(State_Service, on_delete=models.CASCADE,verbose_name="estado del servicio")

    def __str__(self):
        return self.name
    
    class Meta:
        verbose_name = "Servicio"
        verbose_name_plural = "Servicios"
        db_table = "Servicio"
        ordering = ['id']

class Sub_Company(models.Model):
    name = models.CharField(max_length=30, verbose_name="Nombre de sub empresa")
    phone = models.CharField(max_length=10, verbose_name="Telefono sub empresa")
    email = models.EmailField(verbose_name="Correo sub empresa")
    date = models.DateField(verbose_name="Fecha registro sub empresa")
    state = models.ForeignKey(State_Sub_Company, on_delete=models.CASCADE,verbose_name="estado de sub empresa")

    def __str__(self):
        return self.name
    
    class Meta:
        verbose_name = "Sub Empresa"
        verbose_name_plural = "Sub Empresas"
        db_table = "Sub_Empresa"
        ordering = ['id']

class Request(models.Model):
    description = models.TextField(verbose_name="Descripcion de la solicitud")
    date = models.DateField(verbose_name="Fecha de la solicitud")
    state = models.ForeignKey(State_Request, on_delete=models.CASCADE,verbose_name="estado de solicitud")
    service = models.ForeignKey(Service, on_delete=models.CASCADE,verbose_name="Servicio")

    def __str__(self):
        return self.date
    
    class Meta:
        verbose_name = "Solicitud"
        verbose_name_plural = "Solicitudes"
        db_table = "Solicitud"
        ordering = ['id']

class Contract_Sub_Company(models.Model):
    request = models.ForeignKey(Request, on_delete=models.CASCADE,verbose_name="Solicitud")
    state = models.ForeignKey(State_Contract_Sub_Company, on_delete=models.CASCADE,verbose_name="estado de contrato sub empresa")
    dateI = models.DateField(verbose_name="Fecha inicio de contrato")
    dateF = models.DateField(verbose_name="Fecha finalizacion de contrato")
    subcompany = models.ForeignKey(Sub_Company, on_delete=models.CASCADE,verbose_name="sub empresa")

    def __str__(self):
        return self.date
    
    class Meta:
        verbose_name = "Contrato Sub Empresa"
        verbose_name_plural = "Contratos Sub Empresa"
        db_table = "Contrato_Sub_Empresa"
        ordering = ['id']
