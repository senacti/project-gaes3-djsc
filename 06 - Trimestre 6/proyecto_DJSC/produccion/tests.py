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

from produccion.models import Type_Activity, State_Activity, Novelty_Activity, Activity, Type_Production, State_Production, Novelty_Production, Production
os.environ.setdefault('DJANGO_SETTINGS_MODULE', 'proyecto_DJSC.settings')
django.setup()

class ActivityModelTests(TestCase):
    def test_create_activity(self):
        type_activity = Type_Activity.objects.create(type='Test Type')
        novelty_activity = Novelty_Activity.objects.create(novelty='Test Novelty')
        state_activity = State_Activity.objects.create(state='Test State')

        activity = Activity.objects.create(
            type=type_activity,
            novelty=novelty_activity,
            state=state_activity,
        )

        self.assertEqual(activity.type, type_activity)
        self.assertEqual(activity.novelty, novelty_activity)

class ProductionModelTests(TestCase):
    def test_create_production(self):
        type_activity = Type_Activity.objects.create(type='Test Activity')
        type_production = Type_Production.objects.create(type='Test Production Type')
        activity = Activity.objects.create(type=type_activity)

        production = Production.objects.create(
            type=type_production,
            activity=activity,
        )

        self.assertEqual(production.type, type_production)
        self.assertEqual(production.activity, activity)

    def test_production_str_representation(self):
        type_activity = Type_Activity.objects.create(type='Test Activity')
        type_production = Type_Production.objects.create(type='Test Production Type')
        activity = Activity.objects.create(type=type_activity)
        production = Production.objects.create(
            type=type_production,
            activity=activity,
        )

        self.assertEqual(str(production), f'{production.type} - {production.activity}')

class TypeModelTests(TestCase):

    def test_create_type(self):
        type_activity = Type_Activity.objects.create(type='Test Type')
        type_production = Type_Production.objects.create(type='Test Production Type')

        self.assertEqual(type_activity.type, 'Test Type')
        self.assertEqual(type_production.type, 'Test Production Type')

class StateModelTests(TestCase):

    def test_create_state(self):
        state_activity = State_Activity.objects.create(state='Test State')
        state_production = State_Production.objects.create(state='Test Production State')

        self.assertEqual(state_activity.state, 'Test State')
        self.assertEqual(state_production.state, 'Test Production State')

class NoveltyModelTests(TestCase):

    def test_create_novelty(self):
        novelty_activity = Novelty_Activity.objects.create(novelty='Test Novelty')
        novelty_production = Novelty_Production.objects.create(novelty='Test Production Novelty')

        self.assertEqual(novelty_activity.novelty, 'Test Novelty')
        self.assertEqual(novelty_production.novelty, 'Test Production Novelty')