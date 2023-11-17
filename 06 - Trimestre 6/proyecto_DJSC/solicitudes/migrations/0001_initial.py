# Generated by Django 4.2.7 on 2023-11-15 18:58

from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    initial = True

    dependencies = [
        ('produccion', '0001_initial'),
    ]

    operations = [
        migrations.CreateModel(
            name='State_Contract_Sub_Company',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('state', models.CharField(max_length=30, verbose_name='Estado contrato de sub empresa')),
            ],
            options={
                'verbose_name': 'Estado contrato de sub empresa',
                'verbose_name_plural': 'Estados contrato de sub empresa',
                'db_table': 'Estado_Contrato_Sub_Empresa',
                'ordering': ['id'],
            },
        ),
        migrations.CreateModel(
            name='State_Request',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('state', models.CharField(max_length=30, verbose_name='Estado de solicitud')),
            ],
            options={
                'verbose_name': 'Estado de solicitud',
                'verbose_name_plural': 'Estados de solicitud',
                'db_table': 'Estado_Solicitud',
                'ordering': ['id'],
            },
        ),
        migrations.CreateModel(
            name='State_Service',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('state', models.CharField(max_length=30, verbose_name='Estado de servicio')),
            ],
            options={
                'verbose_name': 'Estado de servicio',
                'verbose_name_plural': 'Estados de servicio',
                'db_table': 'estado_Servicio',
                'ordering': ['id'],
            },
        ),
        migrations.CreateModel(
            name='State_Sub_Company',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('state', models.CharField(max_length=30, verbose_name='Estado de sub empresa')),
            ],
            options={
                'verbose_name': 'Estado de sub empresa',
                'verbose_name_plural': 'Estados de sub empresa',
                'db_table': 'Estado_Sub_Empresa',
                'ordering': ['id'],
            },
        ),
        migrations.CreateModel(
            name='Type_Service',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('type', models.CharField(max_length=30, verbose_name='Tipo de servicio')),
            ],
            options={
                'verbose_name': 'Tipo de servicio',
                'verbose_name_plural': 'Tipos de servicio',
                'db_table': 'tipo_Servicio',
                'ordering': ['id'],
            },
        ),
        migrations.CreateModel(
            name='Sub_Company',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name', models.CharField(max_length=30, verbose_name='Nombre de sub empresa')),
                ('phone', models.CharField(max_length=10, verbose_name='Telefono sub empresa')),
                ('email', models.EmailField(max_length=254, verbose_name='Correo sub empresa')),
                ('date', models.DateField(verbose_name='Fecha registro sub empresa')),
                ('state', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='solicitudes.state_sub_company')),
            ],
            options={
                'verbose_name': 'Sub Empresa',
                'verbose_name_plural': 'Sub Empresas',
                'db_table': 'Sub_Empresa',
                'ordering': ['id'],
            },
        ),
        migrations.CreateModel(
            name='Service',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name', models.CharField(max_length=30, verbose_name='Nombre de servicio')),
                ('amount', models.PositiveIntegerField(verbose_name='Cantidad')),
                ('description', models.TextField(verbose_name='Descripcion del servicio')),
                ('state', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='solicitudes.state_service')),
                ('type', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='solicitudes.type_service')),
            ],
            options={
                'verbose_name': 'Servicio',
                'verbose_name_plural': 'Servicios',
                'db_table': 'Servicio',
                'ordering': ['id'],
            },
        ),
        migrations.CreateModel(
            name='Request',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('description', models.TextField(verbose_name='Descripcion de la solicitud')),
                ('date', models.DateField(verbose_name='Fecha de la solicitud')),
                ('production', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='produccion.production')),
                ('service', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='solicitudes.service')),
                ('state', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='solicitudes.state_request')),
            ],
            options={
                'verbose_name': 'Solicitud',
                'verbose_name_plural': 'Solicitudes',
                'db_table': 'Solicitud',
                'ordering': ['id'],
            },
        ),
        migrations.CreateModel(
            name='Contract_Sub_Company',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('dateI', models.DateField(verbose_name='Fecha inicio de contrato')),
                ('dateF', models.DateField(verbose_name='Fecha finalizacion de contrato')),
                ('request', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='solicitudes.request')),
                ('state', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='solicitudes.state_contract_sub_company')),
                ('subcompany', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='solicitudes.sub_company')),
            ],
            options={
                'verbose_name': 'Contrato Sub Empresa',
                'verbose_name_plural': 'Contratos Sub Empresa',
                'db_table': 'Contrato_Sub_Empresa',
                'ordering': ['id'],
            },
        ),
    ]
