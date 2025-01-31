// JavaScript Document
"use strict";
var baseUrl = APP_URL + "/";
const token = $('meta[name="csrf-token"]').attr("content");
var pagetype = jQuery('input[name="pagetype"]').val();
$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});

$(".show_hide_password a").on("click", function (event) {
    event.preventDefault();
    var $this = $(this).parent().parent();
    if ($this.find("input").attr("type") == "text") {
        $this.find("input").attr("type", "password");
        $this.find("a i").addClass("fa-eye-slash");
        $this.find("a i").removeClass("fa-eye");
    } else if ($this.find("input").attr("type") == "password") {
        $this.find("input").attr("type", "text");
        $this.find("a i").removeClass("fa-eye-slash");
        $this.find("a i").addClass("fa-eye");
    }
});

$(".custom-file-input").on("change", function () {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

$(".showOnUpload").change(function () {
    $("#showOnUpload").prop("src", URL.createObjectURL(this.files[0]));
});
$(".showOnUploadSecondary").change(function () {
    $("#showOnUploadSecondary").prop("src", URL.createObjectURL(this.files[0]));
});
$(".showMultipleOnUpload").change(function () {
    $("#showMultipleOnUpload").html("");
    var filesAmount = this.files.length;
    var i;
    for (i = 0; i < filesAmount; i++) {
        var reader = new FileReader();
        reader.onload = function (event) {
            $($.parseHTML("<img>"))
                .attr({ src: event.target.result, width: 200, height: 200 })
                .addClass("img-fluid img-thumbnail m-2")
                .appendTo("#showMultipleOnUpload");
            $;
        };
        reader.readAsDataURL(this.files[i]);
    }
    // $('#showOnUpload').prop('src',URL.createObjectURL(this.files[0]));
});
$(document).ready(function (e) {
    $(document).on("change", ".getPopulate", function () {
        var optHtml =
            '<option value="">Select a ' +
            $(this).data("message") +
            "</option>";
        if ($(this).val() != "") {
            populateData($(this));
        } else {
            $("." + $(this).data("location"))
                .html("")
                .html(optHtml);
        }
    });
    $("form.formsubmit").on("submit", function (e) {
        e.preventDefault();
        var $this = $(this);
        console.table($this);
        /* console.table($this); */
        var formActionUrl = $this.prop("action");
        if ($($this).hasClass("fileupload")) {
            var fd = new FormData(document.getElementById($($this).attr("id")));
        } else {
            var fd = $($this).serialize();
        }
        var $button = $(this).find('button[type="submit"]');
        var orgButtonHtml = $button.html();
        $button.prop("disabled", true); // Button Disabled after submission the form
        $button.html(
            '<span class="spinner-border spinner-border-sm" style="color: #ffffff" role="status" aria-hidden="true"></span><span style="color: #ffffff"> Processing...</span>'
        );
        // console.log(formActionUrl);
        let commonOption = {
            type: "post",
            url: formActionUrl,
            data: fd,
            dataType: "json",
        };
        if ($($this).hasClass("fileupload")) {
            commonOption["cache"] = false;
            commonOption["processData"] = false;
            commonOption["contentType"] = false;
        }
        // console.log(commonOption);
        // return false;
        // console.log($($this).attr('id'));
        $.ajax({
            ...commonOption,
            beforeSend: function () {},
            success: function (response) {
                $button.prop("disabled", false); // Loader Disabled
                $button.html(orgButtonHtml);
                if (response.status) {
                    if (response.data.redirect_url) {
                        showToast("success", "Hrms", response.message);
                        setTimeout(function () {
                            window.location.replace(response.data.redirect_url);
                        }, 3000);
                    } else {
                        showToast("success", "Hrms", response.message);
                        setTimeout(function () {
                            location.reload();
                        }, 3000);
                    }
                } else {
                    showToast(
                        "error",
                        "Hrms",
                        response.message ||
                            "We are facing some technical issue now."
                    );
                }
            },
            error: function (response) {
                console.log(response);
                $button.prop("disabled", false); // Loader Disabled
                $button.html(orgButtonHtml);
                let responseJSON = response.responseJSON;
                $(".err_message").removeClass("d-block").hide();
                $("form .form-control").removeClass("is-invalid");
                $.each(responseJSON.errors, function (index, valueMessage) {
                    $("#" + index).addClass("is-invalid");
                    $("#" + index).after(
                        "<p class='d-block text-danger err_message'>" +
                            valueMessage +
                            "</p>"
                    );
                });
                showToast("error", "Hrms", "Please Fill Carefully");

                // Swal.fire({
                //     icon: 'error',
                //     title: 'We are facing some technical issue now. Please try again after some time',
                //     showConfirmButton: false,
                //     timer: 1500
                // })
            },
            /* ,
            complete: function(response){
                location.reload();
            } */
        });
    });

    $(".card-table").on("click", ".editData", function (e) {
        var $this = $(this);
        var uuid = $this.data("uuid");
        var find = $this.data("table");
        var action = $this.data("action");
        var formModal = $this.data("form-modal");
        console.log(formModal);
        var message = $this.data("message") ?? "test message";

        $.ajax({
            type: "get",
            url: action,
            data: { uuid: uuid, find: find },
            cache: false,
            dataType: "json",
            beforeSend: function () {},
            success: function (response) {
                if (response.status) {
                    let update = $("#" + formModal)
                        .find('button[type="submit"]')
                        .html("Update");
                    $("#" + formModal)
                        .find(".action_name")
                        .html("Edit");
                    $("#" + formModal)
                        .find('button[type="reset"]')
                        .html("Cancel");
                    // $("#" + formModal)
                    //     .find('button[type="reset"]')
                    //     .addClass("reload");
                    $("#" + formModal)
                        .find(".form-section")
                        .html(response.data.html_view);
                    $("#" + formModal).modal("show");
                    // $.each(response.data, function (index, valueMessage) {
                    //     // console.log(index);
                    //     $("#" + index).val(valueMessage);
                    // });
                } else {
                    showToast(
                        "error",
                        "Hrms",
                        "We are facing some technical issue now."
                    );
                }
            },
            error: function (response) {
                showToast(
                    "error",
                    "Hrms",
                    "We are facing some technical issue now. Please try again after some time"
                );
            },
            /* ,
            complete: function(response){
                location.reload();
            } */
        });
    });
    $(".card-table").on("click", ".changeStatus", function (e) {
        var $this = $(this);
        var uuid = $this.data("uuid");
        var value = $this.data("value");
        var find = $this.data("table");
        var actionUrl = $this.data("action");
        var message = $this.data("message") ?? "test message";
        Swal.fire({
            title: "Are you sure you want to " + message + " it?",
            text: "The status will be changed to " + message,
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, " + message + " it!",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "get",
                    url: actionUrl,
                    data: { uuid: uuid, find: find, value: value },
                    cache: false,
                    dataType: "json",
                    beforeSend: function () {},
                    success: function (response) {
                        if (response.status) {
                            showToast(
                                "success",
                                "Hrms",
                                "Status Updated!"
                            );
                            setTimeout(function () {
                                location.reload();
                            }, 3000);
                        } else {
                            showToast(
                                "error",
                                "Hrms",
                                "We are facing some technical issue now."
                            );
                        }
                    },
                    error: function (response) {
                        showToast(
                            "error",
                            "Hrms",
                            "We are facing some technical issue now. Please try again after some time"
                        );
                    },
                    /* ,
                    complete: function(response){
                        location.reload();
                    } */
                });
            }
        });
    });

    $(document).on("click", ".statusChange", function (e) {
        changeStatus($(this));
    });
    $(document).on("click", ".modal button.resetBtn", function (e) {
        if ($("form.formSubmit .password_section").length > 0)
            $("form.formSubmit .password_section").removeClass("d-none");
        if ($("form.formSubmit .cv_section label span").length > 0)
            $("form.formSubmit .cv_section label span").removeClass("d-none");
        $("form.formSubmit").trigger("reset");
        $("form.formSubmit").prop("action", $("form.formSubmit").data("url"));
        $("form.formSubmit #email").prop("disabled", false);
        $(".display_picture").addClass("d-none");
    });
    $(document).on("click", ".deleteData", function (e) {
        // console.log('here');
        deleteData($(this));
    });
    $(".customdatatable").on("click", ".changeStatus", function (e) {
        changeStatus($(this));
    });
    $(".customdatatable").on("click", ".deleteData", function (e) {
        deleteData($(this));
    });
    $(".deleteDocument").on("click", function (e) {
        var $this = $(this);
        var uuid = $this.data("uuid");
        var find = $this.data("table");
        Swal.fire({
            title: "Are you sure you want to delete it?",
            text: "You wont be able to revert this action!!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "delete",
                    url: baseUrl + "ajax/deleteData",
                    data: { uuid: uuid, find: find },
                    cache: false,
                    dataType: "json",
                    beforeSend: function () {},
                    success: function (response) {
                        if (response.status) {
                            showToast(
                                "success",
                                "Hrms",
                                "Deleted Successfully"
                            );
                            setTimeout(function () {
                                location.reload();
                            }, 3000);
                        } else {
                            showToast(
                                "error",
                                "Hrms",
                                "We are facing some technical issue now."
                            );
                        }
                    },
                    error: function (response) {
                        showToast(
                            "error",
                            "Hrms",
                            "We are facing some technical issue now. Please try again after some time"
                        );
                    },
                    /* ,
                    complete: function(response){
                        location.reload();
                    } */
                });
            }
        });
    });

    $(".customdatatable").on(
        "click",
        ".changeUserStatus,.changePaymentStatus,.changeUserBlock",
        function (e) {
            var $this = $(this);
            var state = $this.prop("checked") == true ? 1 : 0;
            var uuid = $this.data("uuid");
            if ($this.hasClass("changeUserStatus")) {
                var value = {
                    is_active: $this.data("value"),
                };
            } else if ($this.hasClass("changePaymentStatus")) {
                var value = {
                    is_paid: state,
                };
            } else {
                var value = {
                    is_blocked: $this.data("block"),
                };
            }
            var find = $this.data("table");
            var message = $this.data("message") ?? "test message";
            Swal.fire({
                title: "Are you sure you want to change the status?",
                text: "The status will be changed",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, change it!",
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "put",
                        url: baseUrl + "ajax/updateStatus",
                        data: { uuid: uuid, find: find, value: value },
                        cache: false,
                        dataType: "json",
                        beforeSend: function () {},
                        success: function (response) {
                            if (response.status) {
                                showToast(
                                    "success",
                                    "Hrms",
                                    "Status Updated!"
                                );
                                setTimeout(function () {
                                    location.reload();
                                }, 3000);
                            } else {
                                showToast(
                                    "error",
                                    "Hrms",
                                    "We are facing some technical issue now."
                                );
                                $this.prop("checked", !state);
                            }
                        },
                        error: function (response) {
                            showToast(
                                "error",
                                "Hrms",
                                "We are facing some technical issue now. Please try again after some time"
                            );
                            $this.prop("checked", !state);
                        },
                        /* ,
                    complete: function(response){
                        location.reload();
                    } */
                    });
                } else {
                    $this.prop("checked", !state);
                }
            });
        }
    );
});
//profile tab height adjust with footer
function calcProfileHeight() {
    setTimeout(() => {
        var leftbarHeight = $(".o-post-inner-lft").outerHeight();
        $(".profile-info-tab").css("min-height", leftbarHeight);
    }, 200);
}

$(window).on("resize", function () {
    calcProfileHeight();
});

function populateData(selector) {
    var optHtml = "";
    var populatelocation = selector.data("location");
    var selected = $("." + populatelocation).data("auth") ?? "";
    console.log(selected);
    var populatemessage = selector.data("message");
    var populateStr = selector.find("option:selected").data("populate");
    optHtml +=
        populateStr.length == 0
            ? '<option value="" selected="selected" disabled >No ' +
              populatemessage +
              "</option>"
            : '<option value="">Select A ' + populatemessage + "</option>";
    for (var key in populateStr) {
        var select = selected && selected == key ? "selected" : "";
        optHtml +=
            '<option value="' +
            key +
            '" ' +
            select +
            ">" +
            populateStr[key] +
            "</option>";
    }
    $("#" + populatelocation)
        .html("")
        .html(optHtml);
}
function showToast(type, title, message) {
    toastr.options = { // Global toastr options (optional, set once)
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "preventDuplicates": false,
        "positionClass": "toast-top-right", // Adjust position as needed
        // ... other toastr options
    };

    switch (type) {
        case 'success':
            toastr.success(message);
            break;
        case 'error':
            toastr.error(message);
            break;
        case 'info':
            toastr.info(message);
            break;
        case 'warning':
            toastr.warning(message);
            break;
        default:
            toastr.info(message); // Default to info if type is not recognized
    }
}

function changeStatus(selector) {
    var $this = selector;
    var state = $this.prop("checked") == true ? 1 : 0;
    var uuid = $this.data("uuid");
    console.log(uuid);
    var is_active = state;
    console.log(is_active);
    var find = $this.data("table");
    var message = $this.data("message") ?? "test message";
    Swal.fire({
        title: "Are you sure you want to change the status?",
        text: "The status will be changed",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, change it!",
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "put",
                url: baseUrl + "ajax/updateStatus",
                data: { uuid: uuid, find: find, is_active: is_active },
                cache: false,
                dataType: "json",
                beforeSend: function () {},
                success: function (response) {
                    if (response.status) {
                        showToast("success", "Hrms", "Status Updated!");
                        setTimeout(function () {
                            location.reload();
                        }, 3000);
                        $this.data(
                            "message",
                            message == "deactive" ? "active" : "deactive"
                        );
                        if ($this.parent().hasClass("inTable")) {
                            $this
                                .parent()
                                .closest("tr.manage-enable")
                                .toggleClass("block-disable");
                            let divRight = $this
                                .parent()
                                .parent()
                                .siblings()
                                .find("div.dot-right");
                            divRight.hasClass("pe-none")
                                ? divRight.removeClass("pe-none")
                                : divRight.addClass("pe-none");
                        } else {
                            $this
                                .parent()
                                .closest("div.manage-data")
                                .toggleClass("block-disable");
                            let divRight = $this
                                .parent()
                                .closest("div.dot-right");
                            divRight.hasClass("pe-none")
                                ? divRight.removeClass("pe-none")
                                : divRight.addClass("pe-none");
                        }
                    } else {
                        showToast(
                            "error",
                            "Hrms",
                            "We are facing some technical issue now."
                        );
                        $this.prop("checked", !state);
                    }
                },
                error: function (response) {
                    showToast(
                        "error",
                        "Hrms",
                        "We are facing some technical issue now. Please try again after some time"
                    );
                    $this.prop("checked", !state);
                },
                /* ,
                complete: function(response){
                    location.reload();
                } */
            });
        } else {
            $this.prop("checked", !state);
        }
    });
}
function deleteData(selector) {
    var $this = selector;
    var uuid = $this.data("uuid");
    var find = $this.data("table");
    var message = $this.data("message") ?? "test message";
    Swal.fire({
        title: "Are you sure you want to delete it?",
        text: "You wont be able to revert this action!!",
        icon: "warning",
        width: "350px",
        allowOutsideClick: false,
        showCancelButton: true,
        confirmButtonColor: "#1D9300",
        cancelButtonColor: "#F90F0F",
        confirmButtonText: "Yes, delete it!",
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "delete",
                url: baseUrl + "ajax/deleteData",
                data: { uuid: uuid, find: find },
                cache: false,
                dataType: "json",
                beforeSend: function () {},
                success: function (response) {
                    if (response.status) {
                        showToast(
                            "success",
                            "Hrms",
                            "Deleted Successfully"
                        );
                        setTimeout(function () {
                            location.reload();
                        }, 3000);
                    } else {
                        showToast(
                            "error",
                            "Hrms",
                            "We are facing some technical issue now."
                        );
                    }
                },
                error: function (response) {
                    showToast(
                        "error",
                        "Hrms",
                        "We are facing some technical issue now. Please try again after some time"
                    );
                },
                /* ,
                complete: function(response){
                    location.reload();
                } */
            });
        }
    });
    // $(document).on("click",".edit-seminer",function(){
    //     alert("hello");
    // })
}
$("#parent_category,#sub_category").change(function (e) {
    e.preventDefault();
    let categoryId = $(this).val();
    let location = $(this).data("location");
    var data = "";
    $.ajax({
        type: "post",
        url: baseUrl + "ajax/getGroupedTypes",
        data: { category: categoryId },
        dataType: "json",
        success: function (response) {
            $(".selecttoolbox").html("");
            if (response.status && response.data.length > 0) {
                $.each(response.data, function (key, value) {
                    key = parseInt(key) + 1;
                    data += `<div class="selecttool-text ${
                        key % 2 == 0 ? "selecttool-textbg" : ""
                    }">
                    <h5>${value.name}</h5>
                    <input type="checkbox" name="types[]" class="form-checkinput" value="${
                        value.value
                    }">
                </div>`;
                });
                $(".selecttoolbox").html(data);
            }
        },
    });
});

function deleteRecord(url) {
    Swal.fire({
        title: "Are you sure you want to delete it?",
        text: "You wont be able to revert this action!!",
        icon: "warning",
        width: "350px",
        allowOutsideClick: false,
        showCancelButton: true,
        confirmButtonColor: "#1D9300",
        cancelButtonColor: "#F90F0F",
        confirmButtonText: "Yes, delete it!",
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "DELETE",
                url: url,
                data: {
                    _token: token,
                },
                cache: false,
                dataType: "json",
                beforeSend: function () {},
                success: function (response) {
                    if (response.status) {
                        showToast(
                            "success",
                            "Hrms",
                            "Deleted Successfully"
                        );
                        setTimeout(function () {
                            location.reload();
                        }, 3000);
                    } else {
                        showToast(
                            "error",
                            "Hrms",
                            "We are facing some technical issue now."
                        );
                    }
                },
                error: function (response) {
                    showToast(
                        "error",
                        "Hrms",
                        "We are facing some technical issue now. Please try again after some time"
                    );
                },
            });
        }
    });
}

$(document).on("change", ".change-status", function (e) {
    let $this = $(this);
    let uuid = $this.data("uuid");
    let value = $this.data("value");
    let actionUrl = $this.data("action");
    let message = $this.data("message") ?? "";
    Swal.fire({
        title: "Are you sure you want to " + message + "?",
        text: "The status will be changed to " + message,
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, " + message,
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "post",
                url: actionUrl,
                data: {
                    _token: token,
                    uuid: uuid,
                    value: value,
                },
                cache: false,
                dataType: "json",
                beforeSend: function () {},
                success: function (response) {
                    if (response.status) {
                        showToast(
                            "success",
                            "Success!",
                            "Status changed successfully"
                        );
                        location.reload();
                        $this.data("value", value ? 0 : 1);
                        $this.data("message", value ? "Active" : "Inactive");
                        $this.prop("checked", value ? false : true);
                    } else {
                        showToast(
                            "error",
                            "Error!",
                            "We are facing some technical issue now"
                        );
                        $this.prop("checked", value ? true : false);
                    }
                },
                error: function (response) {
                    showToast(
                        "error",
                        "Hrms",
                        "We are facing some technical issue now. Please try again after some time"
                    );
                    $this.prop("checked", value ? true : false);
                },
            });
        } else {
            $this.prop("checked", value ? true : false);
        }
    });
});
function slugify(str) {
    str = str.replace(/^\s+|\s+$/g, ""); // trim
    str = str.toLowerCase();

    // Replace spaces with '-'
    str = str.replace(/\s+/g, "-");

    // Remove special characters
    str = str.replace(/[^\w-]+/g, "");

    return str;
}
