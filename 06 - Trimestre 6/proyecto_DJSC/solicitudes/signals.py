from django.db.models.signals import post_save
from django.dispatch import receiver
from .models import Service,State_Service,Sub_Company,State_Sub_Company,Contract_Sub_Company,State_Contract_Sub_Company,Request,State_Request


@receiver(post_save,sender=Service)
def establecer_estado_servicio(sender,instance,created, **kwargs):
    if created and not instance.state:
        estado_en_proceso,_=State_Service.objects.get_or_create(state="disponible")
        instance.state=estado_en_proceso
        instance.save()

@receiver(post_save,sender=Sub_Company)
def establecer_estado_sub_empresa(sender,instance,created, **kwargs):
    if created and not instance.state:
        estado_ocupado,_=State_Sub_Company.objects.get_or_create(state="ocupada")
        instance.state=estado_ocupado
        instance.save()

@receiver(post_save,sender=Contract_Sub_Company)
def establecer_estado_contrato_sub_empresa(sender,instance,created, **kwargs):
    if created and not instance.state:
        estado_en_proceso,_=State_Contract_Sub_Company.objects.get_or_create(state="en proceso")
        instance.state=estado_en_proceso
        instance.save()

@receiver(post_save,sender=Request)
def establecer_estado_solicitud(sender,instance,created, **kwargs):
    if created and not instance.state:
        estado_en_proceso,_=State_Request.objects.get_or_create(state="en proceso")
        instance.state=estado_en_proceso
        instance.save()