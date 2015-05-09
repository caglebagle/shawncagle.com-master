# {{{
 # @Author: Kristopher Watts <kristopher.a.watts@gmail.com>
 # @Location: "docs/scripts.fish"
 #
 # @Uses: A quick fish shell script to compile all scss files in ../starterkit/assets/scss to ../starterkit/assets/css/main.css using the ENTR script (http://entrproject.org)
 #
 # @Example: simply run compsass using fish shell
 #
 #
# }}}*/

function compsass
    set -l mainscss "main.scss"
    set -l maincss  "../css/main.css"
    ls *.scss $mainscss | entr sassc $mainscss $maincss
end


# {{{
 # @Author: Kristopher Watts <kristopher.a.watts@gmail.com>
 # @Location: "docs/scripts.fish"
 #
 # @Uses: A quick fish shell script to reload the browser on file save using the entr script (http://entrproject.org)
 #
 # @Example: simply run rel_browser using fish shell
 #
 #
# }}}*/

function rel_browser
    set -l watchfiles "**.php **.txt **.css"
    ls -R $watchfiles | entr reload-browser firefox
end

# Run both under one function
function go_go_gadget_reload_and_compile
    compsass & rel_browser
end
