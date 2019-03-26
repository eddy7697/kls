export default {
    data() {
        return [{"CaseSN":"案件編號"},
                {"LevelWhoCanBuy":"購買資格"},
                {"Investment":"債權投資總額/待銷售金額"},
                {"UnitAmount":"單位金額"},
                {"AvailableUnits":"可供銷售單位數"},
                {"BeginInvestmentDate":"投資期間開始日"},
                {"EndInvestmentDate":"投資期間結束日"},
                {"InvestmentDays":"投資期間(天數)"},
                {"OriginalCreditor":"原始債權人"},
                {"CreditManagementTrustee":"債權管理受託人"},
                {"CaseTitle":"案件名稱"},
                {"CaseCity":"縣市"},
                {"CaseAdminDistrict":"行政區"},
                {"CaseRoad":"路名(段)"},
                {"CaseAddress":"門牌號"},
                {"CaseType":"類型"},
                {"CaseBuildingAge":"屋齡"},
                {"CaseBuildingHeight":"樓高"},
                {"CaseStage":"樓層"},
                {"CaseParkCount":"車位數量"},
                {"BuildingBlocks":"建物坪數"},
                {"LandHoldings":"土地持份坪數"},
                {"CollateralHoldingType":"擔保品持有類型"},
                {"CollateralProportion":"擔保品持份比例"},
                {"TotalCollateralHolding":"擔保品持有總份額"},
                {"BorrowerHoldsCollateral":"借款人持有擔保品份額"},
                {"LeaseholdHoldingPeriod":"租賃權持有期程(月數)"},
                {"BeginSaleDate":"銷售起始日"},
                {"EndSaleDate":"銷售結束日"},
                {"SaledUnit":"目前已經銷售單位"},
                {"UnSaleUnit":"目前待銷售單位"},
                {"EarlySaleOutDate":"提前售完日期"},
                {"SaleStatus":"目前債權狀態"},
                {"ReturnAnnualizedRate":"年化報酬率"},
                {"CreditLimitToBeSold":"待銷售債權額度"},
                {"ExpectedProfits":"每一萬元預期收益"},
                {"EarlyRepaymentDate":"提前還款日期"},
                {"EarlyRepaymentRateCompute":"提前還款年化報酬率計算"},
                {"Repayment":"還款方式"},
                {"InterestPayouts":"利息給付次數"},
                {"PaymentPeriod":"付款期數"},
                {"InterestPaymentDate":"利息給付日期"},
                {"InvestorTotalAmount":"利息支付投資人總金額"},
                {"ExpiredAccountAmount":"到期入帳金額"}]
    },

    reviewStatus() {
        return [
            {"ALL":"全部"},
            {"PENDING":"待審核"},
            {"PASS":"審核通過"}
        ]
    },

    // 債權資訊
    sec1() {
        return [
            'CaseSN',
            'LevelWhoCanBuy',
            'Investment',
            'UnitAmount',
            'AvailableUnits',
            'BeginInvestmentDate',
            'EndInvestmentDate',
            'InvestmentDays',
            'OriginalCreditor',
            'CreditManagementTrustee',
        ]
    },

    // 擔保品資訊
    sec2() {
        return [
            'CaseTitle',
            'CaseCity',
            'CaseAdminDistrict',
            'CaseRoad',
            'CaseAddress',
            'CaseType',
            'CaseBuildingAge',
            'CaseBuildingHeight',
            'CaseStage',
            'CaseParkCount',
            'BuildingBlocks',
            'LandHoldings',
            'CollateralHoldingType',
            'CollateralProportion',
            'TotalCollateralHolding',
            'BorrowerHoldsCollateral',
            'LeaseholdHoldingPeriod',
        ]
    },
    
    // 銷售面資訊
    sec3() {
        return [

        ]
    },

    // 報酬率計算
    sec4() {
        return [
            'ReturnAnnualizedRate',
            'CreditLimitToBeSold',
            'ExpectedProfits',
            'EarlyRepaymentDate',
            'EarlyRepaymentRateCompute',
        ]
    },

    // 給付模式資訊
    sec5() {
        return [
            'Repayment',
            'InterestPayouts',
        ]
    },

    // 金流資訊
    sec6() {
        return [
            'PaymentPeriod',
            'InterestPaymentDate',
            'InvestorTotalAmount',
            'ExpiredAccountAmount',
        ]
    },

    exist(val, arr) {
        return arr.indexOf(val) > -1 ? true : false
    }
}