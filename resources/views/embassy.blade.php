@extends('app')
@section('content')

<div class="wrapper wrapper-content animated fadeInRight" style="margin-top: 10%">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h4>List of Embassies in Nepal and their details</h4>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                            <thead>
                            <tr>
                                <th>Embassy</th>
                                <th>Address</th>
                                <th>Contact No.</th>
                                <th>Website</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Embassy of United States of America </td>
                                <td>Maharajgunj, Kathmandu</td>
                                <td class="center">+977-1-423-4000 </td>
                                <td><a href="https://np.usembassy.gov/" target="_blank">https://np.usembassy.gov/</a> </td>
                            </tr>
                            <tr>
                                <td>Embassy of Australia </td>
                                <td>Bansbari, Kathmandu</td>
                                <td class="center">+977-1-437-1678 </td>
                                <td><a href="http://nepal.embassy.gov.au/" target="_blank">http://nepal.embassy.gov.au/</a> </td>
                            </tr>
                            <tr>
                                <td>Embassy of Russian Federation</td>
                                <td>Baluwatar, Kathmandu</td>
                                <td class="center">+977-1-441-1063 </td>
                                <td> --- </td>
                            </tr>
                            <tr>
                                <td>Saudi Arabia </td>
                                <td>Sumangal, Maharajgunj, Kathmandu</td>
                                <td class="center">+977-1-472-0891 </td>
                                <td class="center"> --- </td>
                            </tr>
                            <tr>
                                <td>Embassy of Republic of China </td>
                                <td>Hattisar, Kathmandu</td>
                                <td class="center">+977-1-442-5520</td>
                                <td><a href="http://np.china-embassy.org/eng/" target="_blank">http://np.china-embassy.org/eng/</a> </td>
                            </tr>

                             </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection