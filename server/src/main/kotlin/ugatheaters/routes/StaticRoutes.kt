package ugatheaters.routes

import io.ktor.server.routing.*
import io.ktor.http.*
import io.ktor.server.application.*
import io.ktor.server.http.content.*
import io.ktor.server.response.*
import io.ktor.server.request.*
import ugatheaters.routes.*
import ugatheaters.domain.*
import java.io.File

fun Route.staticRouting() {
    route("/") {
        static {
            staticRootFolder = File("files")
            resources("files")
            default("index.html")
        }
    }
}