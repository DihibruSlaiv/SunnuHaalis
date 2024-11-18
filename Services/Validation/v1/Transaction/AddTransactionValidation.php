<?php 
namespace App\Services\Validation\v1\Transaction;

use Illuminate\Support\Facades\Validator; 
use App\Services\Validation\v1\ValidationRules;
use Illuminate\Validation\Rule;


  /*  
   * A Validation Class To validate a user upon registration
   * 
   * 
   * @version    v.1.0.2 
   * @subpackage Service
   * @copyright  Marse Jollof
   * @author     Moses Carayol <mosescarayol82@gmail.com>
   */

class AddTransactionValidation extends ValidationRules
{
    public function __construct()
    {

    }

    public function validate(array $request)
    {
        $validator = Validator::make($request, [
            'amount' => self::_NUMERIC,
            'description' => self::_DESCRIPTION,
            'transtype' => [
                'required',
                Rule::in(self::_TRANS_TYPE),
            ]
        ]);
        return $validator;  
    }
}