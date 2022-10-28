package ugatheaters.plugins

import io.ktor.server.auth.*
import io.ktor.util.*
import io.ktor.server.application.*
import io.ktor.server.response.*
import io.ktor.server.request.*
import io.ktor.server.routing.*

fun Application.configureSecurity() {
    
    /*authentication {
    		basic("auth-basic") {
    			realm = "Access to the '/' path"
    			validate { credentials ->
    				if (credentials.name == "jj" && credentials.password == "0000") {
    					UserIdPrincipal(credentials.name)
    				} else {
    					null
    				}
    			}
    		}
    
    	    form(name = "myauth2") {
    	        userParamName = "user"
    	        passwordParamName = "password"
    	        challenge {
    	        	/**/
    			}
    	    }
    	}

    routing {
        authenticate("myauth1") {
            get("/protected/route/basic") {
                val principal = call.principal<UserIdPrincipal>()!!
                call.respondText("Hello ${principal.name}")
            }
        }
        authenticate("myauth2") {
            get("/protected/route/form") {
                val principal = call.principal<UserIdPrincipal>()!!
                call.respondText("Hello ${principal.name}")
            }
        }
    }*/
	install(Authentication){
		form("auth-form"){
			userParamName = "username"
			passwordParamName = "password"
			validate { credentials ->
				if (credentials.name == "jetbrains" && credentials.password == "foobar") {
					UserIdPrincipal(credentials.name)
				} else {
					null
				}
			}
		}
	}
}
