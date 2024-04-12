<php>
<x-app-layout>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 
<div class="container mt-3">        
  <table class="table">
    <thead>
      <tr>
        <th>nev</th>
        <th>kategória</th>
        <th>kep</th>
        <th>leiras</th>
      </tr>
    </thead>
    <tbody>
        @foreach($kate as $kat)
            <tr>
                <td><p>{{$kat->recepts.nev}}</p></td>
                <td><p>{{$kat->kate.nev}}</p></td>
                <td><p>{{$kat->kep_eleresi_ut}}</p></td>
                <td><p>{{$kat->leiras}}</p></td>
            </tr>
        @endforeach
    </tbody>
  </table>
</div>
</php>
</x-app-layout>
