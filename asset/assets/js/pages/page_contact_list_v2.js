$(function() {
    // contact list v2
    altair_contact_list_v2.init();
});

altair_contact_list_v2 = {
    init: function() {

        $("#contact_list_v2").listnav({
            filterSelector: '.listNavSelector',
            onClick: function(letter) {
                console.log(letter);
            }
        });

    }
};




