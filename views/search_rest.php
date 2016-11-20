<style>
      #map {
        height: 400px;
        width: 100%;
       }
</style>


<p>
    <table class = "table table-stripped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Address1</th>
            <th>Address2</th>
            <th>Region</th>
            <th>Province</th>
            <th>Postcode</th>
            <th>Province</th>
            <th>Postcode</th>
        </tr>
    </thead>
    <tbody>
    

    <?php foreach ($positions as $position): ?>
    
        <tr>
            
            <td><?= $position["Name"] ?></td>
            <td><?= $position["Add1"] ?></td>
            <td><?= $position["Add2"] ?></td>
            <td><?= $position["Region"] ?></td>
            <td><?= $position["Prov"] ?></td>
            <td><?= $position["Postcode"] ?></td>
            <td><?= $position["latitude"] ?></td>
            <td><?= $position["longitude"] ?></td>
        </tr>
        
        <?= $latitude = $position["latitude"];?>
        <?= $longitude = $position["longitude"];?>
        
    <?php endforeach ?>
    
    </tbody>
    </table>
</p>

    <h3>Google Map</h3>
    <div id="map"></div>
    <script>
        function initMap() {
            var uluru = {lat: parseFloat('<?php echo "$latitude";?>') , lng: parseFloat('<?php echo "$longitude";?>')};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 16,
                center: uluru
                //center: {lat:43.472729, lng:-80.542165}
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtPDrH4urnvLWbPv0kWSO0uzyijxcahS4&callback=initMap">
    </script>