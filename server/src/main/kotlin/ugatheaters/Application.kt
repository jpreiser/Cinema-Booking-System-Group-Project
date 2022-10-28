package ugatheaters

import io.ktor.server.engine.*
import io.ktor.server.netty.*
import io.ktor.server.application.*
import ugatheaters.plugins.*
import ugatheaters.domain.*
import ugatheaters.routes.*

/*fun main() {
    embeddedServer(Netty, port = 9090, host = "0.0.0.0") {
        configureSockets()
        configureSerialization()
        configureHTTP()
        configureSecurity()
        configureRouting()
    }.start(wait = true)
}*/

fun main(args: Array<String>): Unit = io.ktor.server.netty.EngineMain.main(args)

fun Application.module() {
    configureRouting()
    //configureTemplating()
    configureSerialization()
}
