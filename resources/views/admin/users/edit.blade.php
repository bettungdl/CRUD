<!DOCTYPE html>
<html lang="es-MX">

@include('layouts.header')

@livewire('admin.users.edit',['id' => $id ?? null])

@include('layouts.footer')

</html>