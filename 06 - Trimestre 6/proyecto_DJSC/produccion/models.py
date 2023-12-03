from django.db import models

# Create your models here.
class Type_Activity(models.Model):
    type = models.CharField(max_length=30, verbose_name="Tipo de actividad")

    def __str__(self):
        return self.type
    
    class Meta:
        verbose_name = "Tipo de actividad"
        verbose_name_plural = "Tipos de actividad"
        db_table = "Tipo_Actividad"
        ordering = ['id']

class State_Activity(models.Model):
    state = models.CharField(max_length=30, verbose_name="Estado de actividad")
    
    def __str__(self):
        return self.state
        
    class Meta:
        verbose_name = "Estado de actividad"
        verbose_name_plural = "Estados de actividad"
        db_table = "Estado_Actividad"
        ordering = ['id']

class Type_Production(models.Model):
    type = models.CharField(max_length=30, verbose_name="Tipo de producción")

    def __str__(self):
        return self.type
            
    class Meta:
        verbose_name = "Tipo de producción"
        verbose_name_plural = "Tipos de producción"
        db_table = "Tipo_Produccion"
        ordering = ['id']

class State_Production(models.Model):
    state = models.CharField(max_length=30, verbose_name="Estado de producción")

    def __str__(self):
        return self.state
            
    class Meta:
        verbose_name = "Estado de producción"
        verbose_name_plural = "Estados de producción"
        db_table = "Estado_Produccion"
        ordering = ['id']
    
class Novelty_Production(models.Model):
    novelty = models.CharField(max_length=30, verbose_name="Novedad de producción")

    def __str__(self):
        return self.novelty
            
    class Meta:
        verbose_name = "Novedad de producción"
        verbose_name_plural = "Novedades de producción"
        db_table = "Novedad_Produccion"
        ordering = ['id']

class Activity(models.Model):
    date = models.DateField(verbose_name="Fecha actividad")
    novelty = models.CharField(max_length=50, verbose_name="Novedad de actividad")
    state = models.ForeignKey(State_Activity, on_delete=models.CASCADE,verbose_name="estado de la actividad")
    type = models.ForeignKey(Type_Activity, on_delete=models.CASCADE,verbose_name="Tipo de actividad")

    def __str__(self):
        return self.novelty
            
    class Meta:
        verbose_name = "Actividad"
        verbose_name_plural = "Actividades"
        db_table = "Actividad"
        ordering = ['id']

class Production(models.Model):
    activity = models.ForeignKey(Activity, on_delete=models.CASCADE,verbose_name="actividad")
    date = models.DateField(verbose_name="Fecha produccion")
    novelty = models.ForeignKey(Novelty_Production, on_delete=models.CASCADE,verbose_name="novedad de produccion")
    type = models.ForeignKey(Type_Production, on_delete=models.CASCADE,verbose_name="Tipo de produccion")
    state = models.ForeignKey(State_Production, on_delete=models.CASCADE,verbose_name="estado de produccion")

    def __str__(self):
        return self.date
            
    class Meta:
        verbose_name = "Produccion"
        verbose_name_plural = "Producciones"
        db_table = "Produccion"
        ordering = ['id']