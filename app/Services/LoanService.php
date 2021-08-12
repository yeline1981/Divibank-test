<?php

namespace App\Services;

use App\Models\Loan;

class LoanService {

    public function list()
    {
        return Loan::all();            
    } 

    public function store(array $loanData)
    {  
        $loan = Loan::create($loanData);
        return $loan;
    }

    public function show($id)
    {  
        $loan = Loan::findOrFail($id)->get();
        return $loan;
    }

    public function update($id, array $loanData)
    {  
        $loan = Loan::findOrFail($loanData);

        $loan->requested_amount = $LoanData['requested_amount'];        
        $loan->save();

        return $loan;
    }

    public function delete($id)
    {
        $loan = Loan::findOrFail($id);

        $loan->delete();
    }


}