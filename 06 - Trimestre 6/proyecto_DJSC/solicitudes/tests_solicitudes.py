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
from solicitudes.models import Type_Service, State_Service, State_Request, State_Sub_Company, State_Contract_Sub_Company, Service, Sub_Company, Request, Contract_Sub_Company

class TypeServiceModelTests(TestCase):
    def test_create_type_service(self):
        type_service = Type_Service.objects.create(type='Test Type')
        self.assertEqual(type_service.type, 'Test Type')

class StateServiceModelTests(TestCase):
    def test_create_state_service(self):
        state_service = State_Service.objects.create(state='Test State')
        self.assertEqual(state_service.state, 'Test State')

class StateRequestModelTests(TestCase):
    def test_create_state_request(self):
        state_request = State_Request.objects.create(state='Test State')
        self.assertEqual(state_request.state, 'Test State')

class StateSubCompanyModelTests(TestCase):
    def test_create_state_sub_company(self):
        state_sub_company = State_Sub_Company.objects.create(state='Test State')
        self.assertEqual(state_sub_company.state, 'Test State')

class StateContractSubCompanyModelTests(TestCase):
    def test_create_state_contract_sub_company(self):
        state_contract_sub_company = State_Contract_Sub_Company.objects.create(state='Test State')
        self.assertEqual(state_contract_sub_company.state, 'Test State')

class ServiceModelTests(TestCase):
    def test_create_service(self):
        type_service = Type_Service.objects.create(type='Test Type')
        state_service = State_Service.objects.create(state='Test State')

        service = Service.objects.create(
            type=type_service,
            name='Test Service',
            amount=10,
            description='Test Description',
            state=state_service
        )

        self.assertEqual(service.type, type_service)
        self.assertEqual(service.name, 'Test Service')
        self.assertEqual(service.amount, 10)
        self.assertEqual(service.description, 'Test Description')
        self.assertEqual(service.state, state_service)

    def test_delete_service(self):
        type_service = Type_Service.objects.create(type='Test Type')
        state_service = State_Service.objects.create(state='Test State')

        service = Service.objects.create(
            type=type_service,
            name='Test Service',
            amount=10,
            description='Test Description',
            state=state_service
        )

        service.delete()

        with self.assertRaises(ObjectDoesNotExist):
            Service.objects.get(id=service.id)

    def test_edit_service(self):
        type_service = Type_Service.objects.create(type='Test Type')
        state_service = State_Service.objects.create(state='Test State')

        service = Service.objects.create(
            type=type_service,
            name='Test Service',
            amount=10,
            description='Test Description',
            state=state_service
        )

        new_type_service = Type_Service.objects.create(type='New Test Type')
        new_state_service = State_Service.objects.create(state='New Test State')

        service.type = new_type_service
        service.name = 'New Test Service'
        service.amount = 20
        service.description = 'New Test Description'
        service.state = new_state_service
        
        service.save()

        self.assertEqual(service.type, new_type_service)
        self.assertEqual(service.state, new_state_service)

class SubCompanyModelTests(TestCase):
    def test_create_sub_company(self):
        state_sub_company = State_Sub_Company.objects.create(state='Test State')

        sub_company = Sub_Company.objects.create(
            name='Test Sub Company',
            phone='1234567890',
            email='test@example.com',
            state=state_sub_company
        )

        self.assertEqual(sub_company.name, 'Test Sub Company')
        self.assertEqual(sub_company.phone, '1234567890')
        self.assertEqual(sub_company.email, 'test@example.com')
        self.assertEqual(sub_company.state, state_sub_company)

    def test_delete_sub_company(self):
        state_sub_company = State_Sub_Company.objects.create(state='Test State')

        sub_company = Sub_Company.objects.create(
            name='Test Sub Company',
            phone='1234567890',
            email='test@example.com',
            state=state_sub_company
        )

        sub_company.delete()

        with self.assertRaises(ObjectDoesNotExist):
            Sub_Company.objects.get(id=sub_company.id)

    def test_edit_sub_company(self):
        state_sub_company = State_Sub_Company.objects.create(state='Test State')

        sub_company = Sub_Company.objects.create(
            name='Test Sub Company',
            phone='1234567890',
            email='test@example.com',
            state=state_sub_company
        )

        new_state_sub_company = State_Sub_Company.objects.create(state='New Test State')

        sub_company.name = 'New Test Sub Company'
        sub_company.phone = '0987654321'
        sub_company.email = 'newtest@example.com'
        sub_company.state = new_state_sub_company
        
        sub_company.save()

        self.assertEqual(sub_company.name, 'New Test Sub Company')
        self.assertEqual(sub_company.phone, '0987654321')
        self.assertEqual(sub_company.email, 'newtest@example.com')
        self.assertEqual(sub_company.state, new_state_sub_company)

class RequestModelTests(TestCase):
    def test_create_request(self):
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

        self.assertEqual(request.description, 'Test Description')
        self.assertEqual(request.service, service)
        self.assertEqual(request.state, state_request)

    def test_delete_request(self):
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

        request.delete()

        with self.assertRaises(ObjectDoesNotExist):
            Request.objects.get(id=request.id)

    def test_edit_request(self):
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

        new_state_request = State_Request.objects.create(state='New Test State')

        request.description = 'New Test Description'
        request.service = service
        request.state = new_state_request

        request.save()

        self.assertEqual(request.description, 'New Test Description')
        self.assertEqual(request.service, service)
        self.assertEqual(request.state, new_state_request)

class ContractSubCompanyModelTests(TestCase):
    def test_create_contract_sub_company(self):
        state_sub_company = State_Sub_Company.objects.create(state='Test State')
        sub_company = Sub_Company.objects.create(
            name='Test Sub Company',
            phone='1234567890',
            email='test@example.com',
            state=state_sub_company
        )

        state_contract_sub_company = State_Contract_Sub_Company.objects.create(state='Test State')

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

        contract_sub_company = Contract_Sub_Company.objects.create(
            request=request,
            state=state_contract_sub_company,
            dateF='2024-03-12',
            subcompany=sub_company
        )

        self.assertEqual(contract_sub_company.request, request)
        self.assertEqual(contract_sub_company.state, state_contract_sub_company)
        self.assertEqual(str(contract_sub_company.dateF), '2024-03-12')
        self.assertEqual(contract_sub_company.subcompany, sub_company)

    def test_delete_contract_sub_company(self):
        state_sub_company = State_Sub_Company.objects.create(state='Test State')
        sub_company = Sub_Company.objects.create(
            name='Test Sub Company',
            phone='1234567890',
            email='test@example.com',
            state=state_sub_company
        )

        state_contract_sub_company = State_Contract_Sub_Company.objects.create(state='Test State')

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

        contract_sub_company = Contract_Sub_Company.objects.create(
            request=request,
            state=state_contract_sub_company,
            dateF='2024-03-12',
            subcompany=sub_company
        )

        contract_sub_company.delete()

        with self.assertRaises(ObjectDoesNotExist):
            Contract_Sub_Company.objects.get(id=contract_sub_company.id)

    def test_edit_contract_sub_company(self):
        state_sub_company = State_Sub_Company.objects.create(state='Test State')
        sub_company = Sub_Company.objects.create(
            name='Test Sub Company',
            phone='1234567890',
            email='test@example.com',
            state=state_sub_company
        )

        state_contract_sub_company = State_Contract_Sub_Company.objects.create(state='Test State')

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

        contract_sub_company = Contract_Sub_Company.objects.create(
            request=request,
            state=state_contract_sub_company,
            dateF='2024-03-12',
            subcompany=sub_company
        )
        
        new_state_contract_sub_company = State_Contract_Sub_Company.objects.create(state='New Test State')

        contract_sub_company.state = new_state_contract_sub_company
        contract_sub_company.dateF = '2023-03-12'

        contract_sub_company.save()

        self.assertEqual(contract_sub_company.state, new_state_contract_sub_company)
        self.assertEqual(str(contract_sub_company.dateF), '2023-03-12')