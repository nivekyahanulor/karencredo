"use strict";
document.addEventListener("DOMContentLoaded", function(e) {
    {
        for (let t of document.querySelector(".numeral-mask-wrapper").children) t.onkeyup = function(e) {
            /^\d$/.test(e.key) ? t.nextElementSibling && this.value.length === parseInt(this.attributes.maxlength.value) && t.nextElementSibling.focus() : "Backspace" === e.key && t.previousElementSibling && t.previousElementSibling.focus()
        }, t.onkeypress = function(e) {
            "-" === e.key && e.preventDefault()
        };
        const o = document.querySelector("#twoStepsForm");
        if (o) {
            FormValidation.formValidation(o, {
                fields: {
                    otp: {
                        validators: {
                            notEmpty: {
                                message: "Please enter authentication code"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap5: new FormValidation.plugins.Bootstrap5({
                        eleValidClass: "",
                        rowSelector: ".mb-5"
                    }),
                    submitButton: new FormValidation.plugins.SubmitButton,
                    defaultSubmit: new FormValidation.plugins.DefaultSubmit,
                    autoFocus: new FormValidation.plugins.AutoFocus
                }
            });
            const i = o.querySelectorAll(".numeral-mask"),
                t = function() {
                    let t = !0,
                        n = "";
                    i.forEach(e => {
                        "" === e.value && (t = !1, o.querySelector('[name="otp"]').value = ""), n += e.value
                    }), t && (o.querySelector('[name="otp"]').value = n)
                };
            i.forEach(e => {
                e.addEventListener("keyup", t)
            })
        }
    }
});