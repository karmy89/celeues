@php
  $estado = 'Activo';
  $classType = 'info';

  switch($type) {
    case 2: $classType = 'warning'; $estado = 'Prestado'; break;
    case 0: $classType = 'danger'; $estado = (@$msg == null ? 'Dañado' : $msg); break;
  }
@endphp
<div class="alert alert-{{ $classType }}" style="text-align: center; margin: 0px;">
  <div class="text-xs text-bold">{{ $estado }}</div>
</div>