from django.contrib.auth.models import AbstractUser
from django.db import models
from .managers import CustomUserManager

class User(AbstractUser):
    full_name = models.CharField(max_length=150)
    address = models.CharField(max_length=255)
    username = None
    email = models.EmailField(unique=True)

    USERNAME_FIELD = 'email'
    REQUIRED_FIELDS = ['full_name']

    objects = CustomUserManager()

    def __str__(self):
        return self.email

class Profile(models.Model):
    user = models.OneToOneField(User, on_delete=models.CASCADE)

    def __str__(self):
        return self.user.email