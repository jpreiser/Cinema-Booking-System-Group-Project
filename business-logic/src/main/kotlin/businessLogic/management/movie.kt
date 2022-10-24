package businessLogic.management

class Movie(_title: String){
    var title = _title
        internal set
    var category: String? = null
        internal set
    var cast = listOf<String>()
        internal set
    var director: String? = null
        internal set
    var producer: String? = null
        internal set
    var trailerLink: String? = null
        internal set
    var showings = listOf<Showing>()
    var rating: FilmRating? = null

    fun updateTrailer(link: String): Boolean{return true}
    // fun updateReviews
}

enum class FilmRating{
    G, PG, PG13, R, NC17
}