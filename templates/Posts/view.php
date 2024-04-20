
<?php 
    $cep = $post->cep;
?>
<center>
    <h4 class="heading"><?= __('Solicitação') ?></h4>
</center>
<table>                
    <tr>
        <th colspan="1"><?= __('Imagem') ?></th>
        <td colspan="1"><?= $this->Html->Image($post->image) ?></td>
    </tr>
    <tr>
        <th><?= __('Id') ?></th>
        <td><?= $this->Number->format($post->id) ?></td>
    </tr>
    <tr>
        <th><?= __('Tipo') ?></th>
        <td><?= $types[$post->type] ?></td>
    </tr>
    <tr>
        <th><?= __('Pendente') ?></th>
        <td><?= $status[$post->status] ?></td>
    </tr>
    <tr>
        <th><?= __('Endereço') ?></th>
        <td><?= h($post->address) ?></td>
    </tr>
    <tr>
        <th><?= __('Nome') ?></th>
        <td><?= h($post->name) ?></td>
    </tr>
    <tr>
        <th><?= __('Telefone') ?></th>
        <td><?= h($post->number) ?></td>
    </tr>
    <tr>
        <th><?= __('E-mail') ?></th>
        <td><?= h($post->email) ?></td>
    </tr>
    <tr>
        <th><?= __('Data do Relato') ?></th>
        <td><?= h($post->created) ?></td>
    </tr>
    <tr>
        <th><?= __('Anotação') ?></th>
        <td><?= h($post->note) ?></td>
    </tr>
</table>
<br>
<?php if(!empty($cep)): ?>
<script>
        function buscarLocalizacao() {
        var cep = document.getElementById("cep").value;
        var geocoder = new google.maps.Geocoder();
        var request = { address: cep };

        geocoder.geocode(request, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
                var map = new google.maps.Map(document.getElementById("map"), {
                center: results[0].geometry.location,
                zoom: 15
            });
            
            var marker = new google.maps.Marker({
              position: results[0].geometry.location,
              map: map,
              title: cep
            });
          } else {
            alert("Erro ao buscar a localização correspondente ao CEP: " + status);
          }
        });
      }
      buscarLocalizacao()
</script>
<?php endif; ?>
<div id="map">
</div>
<input type="hidden" id="cep" value="<?= $cep ?>">
<br>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3GCUiiu0qFaBGGwlPRKu-nZUIHwGh884&callback=buscarLocalizacao"></script>
