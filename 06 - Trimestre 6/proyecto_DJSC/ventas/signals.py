from django.db.models.signals import post_save,pre_save
from django.dispatch import receiver
from .models import Sale,State_Sale
from datetime import date

@receiver(post_save,sender=Sale)
def establecer_estado_venta(sender,instance,created, **kwargs):
    if created:
        estado_en_proceso,_=State_Sale.objects.get_or_create(state="en proceso")
        instance.state=estado_en_proceso
        instance.save()

@receiver(pre_save,sender=Sale)
def establecer_fecha_venta(sender, instance, **kwargs):
    if not instance.date:
        fecha_actual_str = date.today().isoformat()
        instance.date = fecha_actual_str