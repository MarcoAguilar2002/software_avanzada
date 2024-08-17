<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $admin = Role::create(['name'=>'admin']);
        $secretaria = Role::create(['name'=>'secretaria']);
        $doctor = Role::create(['name'=>'doctor']);
        $paciente = Role::create(['name'=>'paciente']);
        $usuario = Role::create(['name'=>'usuario']);

        
        Permission::create(['name'=>'admin.index']);

         //Permisos para admin usuarios
         Permission::create(['name'=>'admin.usuarios.index'])->syncRoles([$admin]);
         Permission::create(['name'=>'admin.usuarios.create'])->syncRoles([$admin]);
         Permission::create(['name'=>'admin.usuarios.store'])->syncRoles([$admin]);
         Permission::create(['name'=>'admin.usuarios.show'])->syncRoles([$admin]);
         Permission::create(['name'=>'admin.usuarios.edit'])->syncRoles([$admin]);
         Permission::create(['name'=>'admin.usuarios.update'])->syncRoles([$admin]);
         Permission::create(['name'=>'admin.usuarios.destroy'])->syncRoles([$admin]);
 
         //Permisos para admin secretarias
         Permission::create(['name'=>'admin.secretarias.index'])->syncRoles([$admin]);
         Permission::create(['name'=>'admin.secretarias.create'])->syncRoles([$admin]);
         Permission::create(['name'=>'admin.secretarias.store'])->syncRoles([$admin]);
         Permission::create(['name'=>'admin.secretarias.show'])->syncRoles([$admin]);
         Permission::create(['name'=>'admin.secretarias.edit'])->syncRoles([$admin]);
         Permission::create(['name'=>'admin.secretarias.update'])->syncRoles([$admin]);
         Permission::create(['name'=>'admin.secretarias.destroy'])->syncRoles([$admin]);
 
         //Permisos para admin pacientes
         Permission::create(['name'=>'admin.pacientes.index'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.pacientes.create'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.pacientes.store'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.pacientes.show'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.pacientes.edit'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.pacientes.update'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.pacientes.destroy'])->syncRoles([$admin,$secretaria]);
 
         //Permisos para admin consultorios
         Permission::create(['name'=>'admin.consultorios.index'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.consultorios.create'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.consultorios.store'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.consultorios.show'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.consultorios.edit'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.consultorios.update'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.consultorios.destroy'])->syncRoles([$admin,$secretaria]);
 
         //Permisos para admin doctores
         Permission::create(['name'=>'admin.doctores.index'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.doctores.create'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.doctores.store'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.doctores.show'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.doctores.edit'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.doctores.update'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.doctores.destroy'])->syncRoles([$admin,$secretaria]);
 
         //Permisos para admin horarios
         Permission::create(['name'=>'admin.horarios.index'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.horarios.create'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.horarios.store'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.horarios.show'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.horarios.edit'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.horarios.update'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.horarios.destroy'])->syncRoles([$admin,$secretaria]);
        

         //Permisos para cita
         Permission::create(['name'=>'admin.eventos.store'])->syncRoles([$paciente]);
         Permission::create(['name'=>'admin.reservas'])->syncRoles([$admin,$paciente]);
         Permission::create(['name'=>'admin.reservas.destroy'])->syncRoles([$admin,$paciente,$doctor]);
         Permission::create(['name'=>'admin.doctor.cita'])->syncRoles([$doctor]);
         Permission::create(['name'=>'admin.doctor.editarCita'])->syncRoles([$doctor]);



        //Permisos reporte
        Permission::create(['name'=>'admin.reportes'])->syncRoles([$admin]);

         //Historial Clinico
         Permission::create(['name'=>'admin.historials.index'])->syncRoles([$admin,$doctor]);
         Permission::create(['name'=>'admin.historials.create'])->syncRoles([$admin,$doctor]);
         Permission::create(['name'=>'admin.historials.store'])->syncRoles([$admin,$doctor]);
         Permission::create(['name'=>'admin.historials.pdf'])->syncRoles([$admin,$doctor]);
         Permission::create(['name'=>'admin.historials.show'])->syncRoles([$admin,$doctor]);
         Permission::create(['name'=>'admin.historials.edit'])->syncRoles([$admin,$doctor]);
         Permission::create(['name'=>'admin.historials.update'])->syncRoles([$admin,$doctor]);
         Permission::create(['name'=>'admin.historials.destroy'])->syncRoles([$admin,$doctor]);

        //Permisos Pagos
         Permission::create(['name'=>'admin.pagos.index'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.pagos.create'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.pagos.store'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.pagos.pdf'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.pagos.show'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.pagos.edit'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.pagos.update'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.pagos.destroy'])->syncRoles([$admin,$secretaria]);

        //permisos consulta
        Permission::create(['name'=>'admin.consulta.index'])->syncRoles([$paciente]);
        Permission::create(['name'=>'send'])->syncRoles([$paciente]);


         //ajax
         Permission::create(['name'=>'admin.horarios.cargar'])->syncRoles([$admin,$secretaria]);
        
        }
}
