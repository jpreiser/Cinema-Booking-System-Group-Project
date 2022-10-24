package businessLogic

import java.util.Date

class Promotion(_code: String) {
    var code = _code
    var startDate: Date? = null
    var endDate: Date? = null
    val bookings = listOf<Booking>()

    fun changeCode(){}
    fun changeStartDate(arg: String){}
    fun changeEndDate(arg: String){}
}