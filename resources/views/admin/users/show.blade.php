<!DOCTYPE html>
<html lang="es-MX">

@include('layouts.header')

@livewire('admin.users.show',['id' => $id])

@include('layouts.footer')

</html>