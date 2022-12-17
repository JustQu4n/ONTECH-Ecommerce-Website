<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Freeship;
use App\Models\Province;
use App\Models\Wards;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
   public function delivery(Request $request){
    $city = City::orderBy('matp','desc')->get();
    return view('admin.deliver.add-deliver')->with(compact('city'));

   }
   public function select_delivery(Request $request){
    $data = $request->all();
    if($data['action']){
        $output = '';
        if($data['action']== "city"){
            $select_province = Province::where('matp',$data['ma_id'])->orderby('maqh','ASC')->get();
                $output.='<option>Chọn quận huyện</option>';
            foreach($select_province as $key => $province){
                $output.='<option value="'.$province->maqh.'">'.$province->name_quanhuyen.'</option>';
            }

        }else{

            $select_wards = Wards::where('maqh',$data['ma_id'])->orderby('xaid','ASC')->get();
            $output.='<option>Chọn xã phường</option>';
            foreach($select_wards as $key => $ward){
                $output.='<option value="'.$ward->xaid.'">'.$ward->name_xaphuongthitran.'</option>';
            }
        }
        echo $output;
    }
  
}
public function insert_delivery(Request $request){
    $data = $request->all();
    $fee_ship = new Freeship();
    $fee_ship->fee_tp = $data['city'];
    $fee_ship->fee_qh = $data['province'];
    $fee_ship->fee_xaid = $data['wards'];
    $fee_ship->fee_feeship = $data['fee_ship'];
    $fee_ship->save();
}

public function update_delivery(Request $request){
    $data = $request->all();
    $fee_ship = Freeship::find($data['feeship_id']);
    $fee_value = rtrim($data['fee_value'],'.');
    $fee_ship->fee_feeship = $fee_value;
    $fee_ship->save();
}
 public function select_feeship(){
    $fee_ship =Freeship::orderby('fee_id','DESC')->get();
    $output = '';
    $output .= '<div class="table-wrapper table-responsive">  
        <table  class="table">
            <thread> 
                <tr>
                    <th>Tên thành phố</th>
                    <th>Tên quận huyện</th> 
                    <th>Tên xã phường</th>
                    <th>Phí ship</th>
                </tr>  
            </thread>
            <tbody>
            ';

            foreach($fee_ship as $key => $fee){
             $output.='
                <tr>
                    <td class="min-width">'.$fee->city->name_city .'</td>
                    <td class="min-width">'.$fee->province->name_quanhuyen .'</td>
                    <td class="min-width">'.$fee->wards->name_xaphuongthitran.'</td>
                    <td contenteditable data-feeship_id="'.$fee->fee_id.'" class="fee_feeship_edit">'.number_format($fee->fee_feeship,0,',','.').'</td>
                </tr>
                ';
            }

            $output.='		
            </tbody>
            </table></div>
            ';

            echo $output;

        }
    }