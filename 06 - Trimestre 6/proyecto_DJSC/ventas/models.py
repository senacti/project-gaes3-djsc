from django.db import models

# Create your models here.
class Type_Payment(models.Model):
    type=models.CharField(max_length=30,verbose_name="Tipo de pago")

    def __str__(self):
        return self.type
    
    class Meta:
        verbose_name = "Tipo de pago"
        verbose_name_plural = "Tipos de pago"
        db_table = "tipo_Pago"
        ordering = ['id']

class State_Sale(models.Model):
    state=models.CharField(max_length=30,verbose_name="Estado de venta")

    def __str__(self):
        return self.state
        
    class Meta:
        verbose_name = "Estado de venta"
        verbose_name_plural = "Estados de venta"
        db_table = "estado_Venta"
        ordering = ['id']
    
class Sale(models.Model):
    date = models.DateField(verbose_name="Fecha de venta")
    datedelivery = models.DateField(verbose_name="Fecha de entrega de venta")
    price = models.FloatField(verbose_name="Precio de venta")
    amount = models.PositiveIntegerField(verbose_name="Cantidad de venta")
    totalVAT = models.FloatField(verbose_name="Total IVA venta")
    totalPrice = models.FloatField(verbose_name="Precio total de venta")
    state = models.ForeignKey(State_Sale, on_delete=models.CASCADE,verbose_name="estado de la venta")

    def __str__(self):
         return str(self.date)
    
    class Meta:
        verbose_name = "Venta"
        verbose_name_plural = "Ventas"
        db_table = "Venta"
        ordering = ['id']

class Payment(models.Model):
    sale = models.ForeignKey(Sale, on_delete=models.CASCADE,verbose_name="venta")
    date = models.DateField(verbose_name="Fecha de pago")
    paymentdate = models.DateField(verbose_name="Fecha de abono")
    amount = models.PositiveIntegerField(verbose_name="Cantidad de pago")
    paymentI = models.FloatField(verbose_name="Abono de pago")
    type = models.ForeignKey(Type_Payment, on_delete=models.CASCADE,verbose_name="Tipo de pago")
    
    def __str__(self):
        return str(self.sale)
    
    class Meta:
        verbose_name = "Pago"
        verbose_name_plural = "Pagos"
        db_table = "Pago"
        ordering = ['id']

 