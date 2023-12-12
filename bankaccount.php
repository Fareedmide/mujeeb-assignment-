<?php

class BankAccount {
    protected $accountNumber;
    protected $balance;

    public function __construct($accountNumber) {
        $this->accountNumber = $accountNumber;
        $this->balance = 0;
    }

    public function getAccountNumber() {
        return $this->accountNumber;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function deposit($amount) {
        $this->balance += $amount;
        echo "Deposited $amount. New balance: {$this->balance}\n";
    }

    public function withdraw($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            echo "Withdrawn $amount. New balance: {$this->balance}\n";
        } else {
            echo "Funds no dey\n";
        }
    }

    public function transfer($amount, BankAccount $reciever) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            $reciever->balance += $amount;
            echo "Transferred $amount to {$reciever->getAccountNumber()}. Your new balance: {$this->balance}\n";
        } else {
            echo "Insufficient funds\n";
        }
    }
}

class SavingsAccount extends BankAccount {
    private $interestRate;

    public function __construct($accountNumber, $interestRate) {
        parent::__construct($accountNumber);
        $this->interestRate = $interestRate;
    }

    public function applyInterest() {
        $interest = $this->balance * $this->interestRate;
        $this->balance += $interest;
        echo "Interest applied. New balance: {$this->balance}\n";
    }
}

class CheckingAccount extends BankAccount {
    private $overdraftLimit;

    public function __construct($accountNumber, $overdraftLimit) {
        parent::__construct($accountNumber);
        $this->overdraftLimit = $overdraftLimit;
    }

    public function withdraw($amount) {
        if ($amount <= ($this->balance + $this->overdraftLimit)) {
            $this->balance -= $amount;
            echo "Withdrawn $amount. New balance: {$this->balance}\n";
        } else {
            echo "Exceeds overdraft limit\n";
        }
    }
}

// Example usage:

$savingsAccount = new SavingsAccount('SA123', 0.02);
$checkingAccount = new CheckingAccount('CA456', 100);

$savingsAccount->deposit(500);
$savingsAccount->applyInterest();

$checkingAccount->deposit(200);
$checkingAccount->withdraw(50);

$savingsAccount->transfer(100, $checkingAccount);

echo "Savings Account Balance: {$savingsAccount->getBalance()}\n";
echo "Checking Account Balance: {$checkingAccount->getBalance()}\n";
