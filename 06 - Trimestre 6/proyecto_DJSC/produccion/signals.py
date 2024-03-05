from django.db.models.signals import post_save
from django.dispatch import receiver
from .models import Novelty_Activity,Novelty_Production,State_Activity,State_Production,Production,Activity


@receiver(post_save,sender=Production)
def establecer_estado_produccion(sender,instance,created, **kwargs):
    if created and not instance.state:
        estado_en_proceso,_=State_Production.objects.get_or_create(state="en proceso")
        instance.state=estado_en_proceso
        instance.save()

@receiver(post_save,sender=Production)
def establecer_novedad_produccion(sender,instance,created, **kwargs):
    if created and not instance.novelty:
        novedad_sin_novedades,_=Novelty_Production.objects.get_or_create(novelty="sin novedades")
        instance.novelty=novedad_sin_novedades
        instance.save()

@receiver(post_save,sender=Activity)
def establecer_estado_actividad(sender,instance,created, **kwargs):
    if created and not instance.state:
        estado_en_proceso,_=State_Activity.objects.get_or_create(state="en proceso")
        instance.state=estado_en_proceso
        instance.save()

@receiver(post_save,sender=Activity)
def establecer_novedad_actividad(sender,instance,created, **kwargs):
    if created and not instance.novelty:
        novedad_sin_novedades,_=Novelty_Activity.objects.get_or_create(novelty="sin novedades")
        instance.novelty=novedad_sin_novedades
        instance.save()