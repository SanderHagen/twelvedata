<?php

declare(strict_types=1);

namespace MarekSkopal\TwelveData\Dto\Fundamentals;

readonly class CashFlowInvestingActivities
{
    public function __construct(
        public ?int $capitalExpenditures,
        public ?int $netIntangibles,
        public ?int $netAcquisitions,
        public ?int $purchaseOfInvestments,
        public ?int $saleOfInvestments,
        public ?int $otherInvestingActivity,
        public int $investingCashFlow,
    ) {
    }

    /**
     * @param array{
     *     capital_expenditures: int|null,
     *     net_intangibles: int|null,
     *     net_acquisitions: int|null,
     *     purchase_of_investments: int|null,
     *     sale_of_investments: int|null,
     *     other_investing_activity: int|null,
     *     investing_cash_flow: int|null,
     * } $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            capitalExpenditures: $data['capital_expenditures'],
            netIntangibles: $data['net_intangibles'],
            netAcquisitions: $data['net_acquisitions'],
            purchaseOfInvestments: $data['purchase_of_investments'],
            saleOfInvestments: $data['sale_of_investments'],
            otherInvestingActivity: $data['other_investing_activity'],
            investingCashFlow: $data['investing_cash_flow'],
        );
    }
}
