from django.db.models.signals import post_save
from django.dispatch import receiver
from .models import Sale,State_Sale


@receiver(post_save,sender=Sale)
def establecer_estado_venta(sender,instance,created, **kwargs):
    if created and not instance.state:
        estado_en_proceso,_=State_Sale.objects.get_or_create(state="en proceso")
        instance.state=estado_en_proceso
        instance.save()
