package businessLogic

class Movie(_title: String){
    var title = _title
        //private set
    var category: String? = null
        //private set
    var cast = listOf<String>()
        //private set
    var director: String? = null
        //private set
    var producer: String? = null
        //private set
    var trailerLink: String? = null
        //private set
    var showings = listOf<Showing>()
    var rating: FilmRating? = null

    fun updateTrailer(link: String): Boolean{return true}
    // fun updateReviews
}

enum class FilmRating{
    G, PG, PG13, R, NC17
}