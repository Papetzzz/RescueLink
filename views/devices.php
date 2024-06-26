<?php require_once '../lib/layout.php'; ?>
<?php $title = 'Rescue Link - Devices' ?>
<section>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Devices</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Devices</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Device Name</th>
                            <th>IP Address</th>
                            <th>Location</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                        <th>No.</th>
                            <th>Device Name</th>
                            <th>IP Address</th>
                            <th>Location</th>
                        </tr>
                    </tfoot>
                    <tbody id="devicesTableTbody">
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                           
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            
                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>
                        </tr>
                        <tr>
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>61</td>
                            
                        </tr>
                        <tr>
                            <td>Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td>San Francisco</td>
                            <td>59</td>
                            
                        </tr>
                        <tr>
                            <td>Rhona Davidson</td>
                            <td>Integration Specialist</td>
                            <td>Tokyo</td>
                            <td>55</td>
                            
                        </tr>
                        <tr>
                            <td>Colleen Hurst</td>
                            <td>Javascript Developer</td>
                            <td>San Francisco</td>
                            <td>39</td>
                            
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"  style="display:none;">
    <tbody id="devicesTableTbodyTemplate">
        <tr class="odd_even">
            <td class="sorting_1">Number</td>
            <td>DeviceName</td>
            <td>IPAddress</td>
            <td>Location_val</td>
            
        </tr>
    </tbody>
</table>
<script src= "../js/devices.js"></script>
