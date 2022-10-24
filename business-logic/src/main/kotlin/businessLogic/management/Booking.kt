package businessLogic.management

import businessLogic.user.*

class Booking {
    var ticketCount: Int? = null
    var payment: Boolean? = null
    var bookingNumber: Int? = null
    var promotion: Promotion? = null
    val promotionEntered get() = promotion == null
    val customer: Customer? = null
    val tickets = listOf<Ticket>()

    fun clearPromotion(){promotion = null}
    fun voidBooking(){}
}