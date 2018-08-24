@extends('layouts.app')

@section('pageTitle')
    Winsor &amp; Newton Archive of 19<sup>th</sup> Century Artists’ materials
@endsection

@section('content')

    <div id="content-primary">
        <h1>Technical Information</h1>

        <p>As a digitisation project the Winsor &amp; Newton archive depends heavily on technical resources. This page
            provides an outline of the project from a technical point of view, a list of equipment (hardware and
            software) used for the project together with some of the reasoning behind these choices. In addition there
            is a description of the workflow during image capture. </p>

        <h3>Technical Brief</h3>

        <p>The project consists of two primary elements: </p>

        <ul class="indent">
            <li>digital page images</li>
            <li>and their metadata</li>
        </ul>

        <p>The images serve two roles:</p>

        <ul class="numbered">
            <li>A digital copy providing a facsimile in case of destruction of the original</li>
            <li>An on-screen reproduction for dissemination of information without recourse to physically disturbing the
                archive
            </li>
        </ul>

        <p>The metadata for this project also has two distinct parts:</p>

        <ul class="numbered">
            <li>image metadata, including date of capture, photographic settings used etc</li>
            <li>indexing metadata i.e. any transcribed and translated information read from the pages</li>
        </ul>

        <p>As part of the AHRC funding, the Visual Arts Data Service VADS will store full-resolution archival images.
            Their storage criteria requires removal of any metadata embedded in the image: this data is stored
            separately. </p>

        <p>Currently the indexing metadata is stored separately from the image file, in a Filemaker database. As part of
            the project we will be assessing the best way of linking the images and their metadata, whether this be by
            embedding data in the image files or continuing to store the image and its data in separate files. The
            optimal solution would be a platform independent format-neutral system which (at least) retains the
            functionality of the current system whilst providing a simple route for future preservation of the digital
            archive. </p>

        <a name="hardware"><h3>Equipment: Hardware</h3></a>

        <p><strong>Canon EOS 1Ds mkII</strong><br/>
            This camera produces 16.6 Mega Pixel images, it includes software to interface with a PC via a Firewire
            cable. Using this setup we can control the camera from the PC and save images directly to our storage
            server. If the photography is to be carried out off-site we can shoot either to a laptop hard drive or to a
            USB/Firewire hard disk allowing up to about 250GB of storage (approximately 15,800 RAW files). We store RAW
            (CR2) files on the server and user Adobe software to convert these files to images.</p>

        <p><strong>Esprit Gemini EM500</strong><br/>
            The Esprit Gemini flash kit is composed of two flash heads (500w/s), two nine-foot stands, softboxes and a
            carrying bag. They offer ample power for our use and allow the equipment to remain portable. Using flash
            units exposes the nineteenth century manuscripts to relatively minute levels of ultraviolet light and allows
            image capture in 1/125 second at F22. It is a practical solution to capturing 17,000 images in a short
            period of time. Using lower ultraviolet radiation lighting would mean much longer exposures introducing
            problems of movement and vibration during image capture and significantly lowering the rate of image
            capture.</p>

        <p><strong>Dell PowerVault NAS 1TB running Windows Storage Server 2003</strong><br/>
            This Network Attached Storage was chosen to provide sufficient space to store about 20,000 RAW files at an
            average of about 16MB each and also leave sufficient space to store a range of JPEG images, files associated
            with the project and batches of TIFF images. We were unable to store 20,000 TIFF images at approximately
            46.5MB each for the duration of the project. They are produced in 250GB batches, copied onto a USB hard disk
            drive and shipped to AHDS where they are archived (although restricted from public access).</p>

        <p>The NAS has nearly 700GB of usable space in a RAID5 array using software RAID. This is based on 4 x 250Gb
            SATA disks. One hard disk failed during the first six months of the project. Because of the RAID5 array no
            data was lost. Consequently to date this system has proved effective, and is accessed from Windows, mac and
            Linux clients. The addition of a hot spare and hardware RAID would be improvements if the equipment were
            re-specified.</p>

        <p><strong>Workstations</strong><br/>
            are Mac and Windows machines, all laptops with additional monitors. A second monitor is used primarily for
            viewing page images whilst entering data and eases data entry enormously. The monitors are reasonable LCD
            models (LaCie 19inch and Dell FP1905 and FP2105). The monitors are not calibrated, but are adjusted to be
            easy on the eye and provide a reasonable colour match in their on-site environment.</p>

        <p>A further development machine is used to do the bulk processing of RAW files to produce TIFF and JPEG images.
            It is based on an Intel Xeon 3.0GHz processor with 2GB (DDR2 400, Dual Channel) RAM. This is capable of
            converting from RAW to archival TIFFs at a rate of approximately four images per minute.</p>
        <a name="software"><h3>Equipment: Software</h3></a>

        <p><strong>Canon Digital Photo Professional, Adobe CS2, Filemaker</strong><br/>
            The Canon software is provided with the camera and allows a PC to control the camera. Adobe CS2 suite has
            ample capability to batch process RAW files into the variety of formats we require. This includes TIFF and
            JPEG formats in various resolutions and automated cropping for some images. Digital Photo Professional is
            capable of RAW conversion, but CS2 offered more flexibility and control at time of capture and conversion.
        </p>

        <p>The database is currently in Filemaker format. Filemaker has the advantage that it is cross platform (Mac and
            Windows) compatible and is easy to learn. A well formed user interface can be produced quickly. Currently
            images are stored as separate files and the file location is referenced by the database. It may be
            desirable, for this collection, to embed some of the indexing data in the image metadata using something
            like Adobe’s XMP format. In this way if an image file is renamed, or moved, it will retain the information
            associated with it. This is an active area of investigation in this project.</p>
        <a name="workflow"><h3>Workflow</h3></a>

        <p>It is crucial that the images are captured with the correct book and page data. To this end each image is
            recorded with a book code and page number visible in the image. We also capture miniaturised KODAK Gray
            Scale and Colour Control charts in the same area. Each image is recorded with this book/page code for a
            filename.</p>

        <div class="c_image">
            <img src="images/archives/wn/page_sample.jpg " alt="page image sample" width="300px">

            <p> Sample page image, the filename for this image would be e.g. P4COVER.TIF
                <br/>&copy; 2006 Hamilton Kerr Institute, University of Cambridge</p>
        </div>
        <p>Image capture is a repetitive process. We are using a system that allows capture of up to 600 images per day.
            With this number of pages, the repetitive task of incrementing page numbers in the image and for the
            filename is deceptively simple. To this end we have tried to automate the bulk of the keyboard commands
            required in order that the user can concentrate on file naming and image quality.</p>

        <p><strong>Capture</strong><br/>
            The photography requires two people, one handling the book under a copy stand with camera mounted above. The
            second person controls the camera using Canon and Adobe Software managed through a Visual Basic script. The
            computer user presses a key to take a photograph which is saved to the hard drive of the NAS. The script
            monitors the save folder and prompts for a filename as the image arrives. The script then displays a preview
            to the user on-screen in Adobe Bridge. This allows the user to check the filename against the book/page code
            recorded in the image in addition to checking the framing of the page image. Page numbers/filenames are
            subsequently re-checked as the images are converted into full-resolution uncompressed TIFF images. The TIFF
            images are delivered to the AHDS where they are archived.</p>

        <p><strong>Conversion</strong><br/>
            The RAW files will be kept for at least the duration of the project. The images are captured with as neutral
            a setting as is practical, exposure is calculated against the KODAK mid-grey. The colour temperature of the
            flash units is checked on a regular basis, and then set in the camera. The RAW conversion settings use the
            colour temperature from the camera. This means that one set of RAW conversion settings can be stored and
            applied to the whole image collection, producing images of a consistent quality across the lifetime of the
            project. </p>
    </div>
@endsection