import os
import django
from django.conf import settings
from django.test import TestCase
from django.core.exceptions import ObjectDoesNotExist
from django.core.exceptions import ValidationError
import sys


sys.path.append('..')
os.environ.setdefault('DJANGO_SETTINGS_MODULE', 'proyecto_DJSC.settings')
django.setup()

os.environ.setdefault('DJANGO_SETTINGS_MODULE', 'proyecto_DJSC.settings')
django.setup()

from ventas.models import Type_Payment, State_Sale, Sale, Payment
from solicitudes.models import Request,Service,Type_Service,State_Request,State_Service

class TypePaymentModelTests(TestCase):
    def test_create_type_payment(self):
        type_payment = Type_Payment.objects.create(type='Test Type Payment')
        self.assertEqual(type_payment.type, 'Test Type Payment')

class StateSaleModelTests(TestCase):
    def test_create_state_sale(self):
        state_sale = State_Sale.objects.create(state='Test State Sale')
        self.assertEqual(state_sale.state, 'Test State Sale')

class SaleModelTests(TestCase):
    def test_create_sale(self):
        state_sale = State_Sale.objects.create(state='Test State Sale')

        type_service = Type_Service.objects.create(type='Test Type')
        state_service = State_Service.objects.create(state='Test State')

        service = Service.objects.create(
            type=type_service,
            name='Test Service',
            amount=10,
            description='Test Description',
            state=state_service
        )

        state_request = State_Request.objects.create(state='Test State')

        request = Request.objects.create(
            description='Test Description',
            service=service,
            state=state_request
        )

        sale = Sale.objects.create(
            price=100.00,
            amount=50.00,
            totalVAT=20.00,
            totalPrice=120.00,
            request=request,
            state=state_sale
        )

        self.assertEqual(sale.price, 100.00)
        self.assertEqual(sale.amount, 50.00)
        self.assertEqual(sale.totalVAT, 20.00)
        self.assertEqual(sale.totalPrice, 120.00)
        self.assertEqual(sale.request, request)
        self.assertEqual(sale.state, state_sale)

    def test_delete_sale(self):
        state_sale = State_Sale.objects.create(state='Test State Sale')

        type_service = Type_Service.objects.create(type='Test Type')
        state_service = State_Service.objects.create(state='Test State')

        service = Service.objects.create(
            type=type_service,
            name='Test Service',
            amount=10,
            description='Test Description',
            state=state_service
        )

        state_request = State_Request.objects.create(state='Test State')

        request = Request.objects.create(
            description='Test Description',
            service=service,
            state=state_request
        )

        sale = Sale.objects.create(
            price=100.00,
            amount=50.00,
            totalVAT=20.00,
            totalPrice=120.00,
            request=request,
            state=state_sale
        )

        sale.delete()

        with self.assertRaises(ObjectDoesNotExist):
            Sale.objects.get(pk=sale.pk)

    def test_edit_sale(self):
            state_sale = State_Sale.objects.create(state='Test State Sale')

            type_service = Type_Service.objects.create(type='Test Type')
            state_service = State_Service.objects.create(state='Test State')

            service = Service.objects.create(
                type=type_service,
                name='Test Service',
                amount=10,
                description='Test Description',
                state=state_service
            )

            state_request = State_Request.objects.create(state='Test State')

            request = Request.objects.create(
                description='Test Description',
                service=service,
                state=state_request
            )

            sale = Sale.objects.create(
                price=100.00,
                amount=50.00,
                totalVAT=20.00,
                totalPrice=120.00,
                request=request,
                state=state_sale
            )

            sale.price = 200.00
            sale.amount = 100.00
            sale.totalVAT = 40.00
            sale.totalPrice = 240.00

            sale.save()

            self.assertEqual(sale.price, 200.00)
            self.assertEqual(sale.amount, 100.00)
            self.assertEqual(sale.totalVAT, 40.00)
            self.assertEqual(sale.totalPrice, 240.00)
            

class PaymentModelTests(TestCase):
    def test_create_payment(self):
        type_payment = Type_Payment.objects.create(type='Test Type Payment')
        state_sale = State_Sale.objects.create(state='Test State Sale')

        type_service = Type_Service.objects.create(type='Test Type')
        state_service = State_Service.objects.create(state='Test State')

        service = Service.objects.create(
            type=type_service,
            name='Test Service',
            amount=10,
            description='Test Description',
            state=state_service
        )

        state_request = State_Request.objects.create(state='Test State')

        request = Request.objects.create(
            description='Test Description',
            service=service,
            state=state_request
        )

        sale = Sale.objects.create(
            price=100.00,
            amount=50.00,
            totalVAT=20.00,
            totalPrice=120.00,
            request=request,
            state=state_sale
        )

        payment = Payment.objects.create(
            sale=sale,
            paymentI=50.00,
            type=type_payment
        )

        self.assertEqual(payment.sale, sale)
        self.assertEqual(payment.paymentI, 50.00)
        self.assertEqual(payment.type, type_payment)

    def test_delete_payment(self):
        type_payment = Type_Payment.objects.create(type='Test Type Payment')
        state_sale = State_Sale.objects.create(state='Test State Sale')

        type_service = Type_Service.objects.create(type='Test Type')
        state_service = State_Service.objects.create(state='Test State')

        service = Service.objects.create(
            type=type_service,
            name='Test Service',
            amount=10,
            description='Test Description',
            state=state_service
        )

        state_request = State_Request.objects.create(state='Test State')

        request = Request.objects.create(
            description='Test Description',
            service=service,
            state=state_request
        )

        sale = Sale.objects.create(
            price=100.00,
            amount=50.00,
            totalVAT=20.00,
            totalPrice=120.00,
            request=request,
            state=state_sale
        )

        payment = Payment.objects.create(
            sale=sale,
            paymentI=50.00,
            type=type_payment
        )

        payment.delete()

        with self.assertRaises(ObjectDoesNotExist):
            Payment.objects.get(pk=payment.pk)

    def test_edit_payment(self):
        type_payment = Type_Payment.objects.create(type='Test Type Payment')
        state_sale = State_Sale.objects.create(state='Test State Sale')

        type_service = Type_Service.objects.create(type='Test Type')
        state_service = State_Service.objects.create(state='Test State')

        service = Service.objects.create(
            type=type_service,
            name='Test Service',
            amount=10,
            description='Test Description',
            state=state_service
        )

        state_request = State_Request.objects.create(state='Test State')

        request = Request.objects.create(
            description='Test Description',
            service=service,
            state=state_request
        )

        sale = Sale.objects.create(
            price=100.00,
            amount=50.00,
            totalVAT=20.00,
            totalPrice=120.00,
            request=request,
            state=state_sale
        )

        payment = Payment.objects.create(
            sale=sale,
            paymentI=50.00,
            type=type_payment
        )

        payment.paymentI = 100.00

        payment.save()

        self.assertEqual(payment.paymentI, 100.00)