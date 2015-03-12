@extends('layouts/system')

@section('content1')

<table class="container content" align="center">
    <tr>
        <td>
            <table class="row note">
                <tr>
                    <td class="wrapper last">
                        <h4>Thank you for joining the Metronic Community!</h4>
                        <p>
                            Please click the following URL to activate your account:
                        </p>
                        <!-- BEGIN: Note Panel -->
                        <table class="twelve columns" style="margin-bottom: 10px">
                            <tr>
                                <td class="panel">
                                    <a href="https://www.keenthemes.com/signup/activate/">
                                        https://www.keenthemes.com/signup/activate/?code=1212 </a>
                                </td>
                                <td class="expander">
                                </td>
                            </tr>
                        </table>
                        <p>
                            If clicking the URL above does not work, copy and paste the URL into a browser window.
                        </p>
                        <!-- END: Note Panel -->
                    </td>
                </tr>
            </table>
				<span class="devider">
				</span>
            <table class="row">
                <tr>
                    <td class="wrapper last">
                        <!-- BEGIN: Disscount Content -->
                        <table class="twelve columns">
                            <tr>
                                <td>
                                    <h4>70% Disscount!</h4>
                                    <p>
                                        Phasellus dictum sapien a neque luctus cursus. Pellentesque sem dolor, fringilla et pharetra vitae. Pellentesque sem dolor, fringilla et pharetra vitae
                                    </p>
                                    <img src="assets/admin/pages/media/email/article.png" class="ie10-responsive" alt=""/>
                                </td>
                                <td class="expander">
                                </td>
                            </tr>
                        </table>
                        <!-- END: Disscount Content -->
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

@endsection