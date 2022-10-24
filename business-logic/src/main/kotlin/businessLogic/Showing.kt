package businessLogic

import java.time.Duration
import java.time.LocalDateTime
import java.util.Date

class Showing{
    var id: Int? = null
    var date: Date? = null
    var duration: Duration? = null
    var time: LocalDateTime? = null
    val movie: Movie? = null
}

class ShowRoom{
    val roomNumber: Int? = null
    var open: Boolean? = null
    var showRoomType: String? = null
}