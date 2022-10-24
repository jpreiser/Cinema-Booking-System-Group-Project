package businessLogic

class Ticket {
    val price: Double? = null
    val ticketNumber: Int? = null
    var valid: Boolean? = null
    val booking: Booking? = null
    val type: TicketType? = null

    fun voidTicket(){valid = false}
    fun discountPrice(amount: Double){}
}

enum class TicketType{
    CHILD, ADULT, SENIOR
}